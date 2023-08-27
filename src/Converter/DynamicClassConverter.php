<?php

namespace Michi\JsonToClass\Converter;

use Adbar\Dot;
use Cocur\Slugify\Slugify;
use Michi\JsonToClass\Enum\PropertyTypeEnum;
use Michi\JsonToClass\Helper\ArrayHelper;
use Michi\JsonToClass\Helper\WordHelper;
use Michi\JsonToClass\Model\ClassObj;
use Michi\JsonToClass\Model\Property;
use Symfony\Component\Console\Style\SymfonyStyle;
use Twig\Environment;

class DynamicClassConverter
{
    
    /**
     * @var Environment
     */
    protected $twig;
    
    /**
     * @var string
     */
    protected $cachePath;
    
    /**
     * @var array
     */
    protected $types;
    
    /**
     * ClassConverter constructor.
     *
     * @param Environment $twig
     * @param string      $cachePath
     */
    public function __construct(Environment $twig, $cachePath)
    {
        $this->twig = $twig;
        $this->cachePath = $cachePath;
        $this->types = [];
    }
    
    
    public function convert(SymfonyStyle $io, $data, $namespace, $objectName, $outputDir, $uniqueId = "")
    {
        if (!is_array($data)) {
            return $this->getType($data);
        }
        $finalOutputDir = rtrim($outputDir, "/") . '/' . str_replace('\\', '/', $namespace);
        if (!is_dir($finalOutputDir)) {
            mkdir($finalOutputDir, 0777, true);
        }
        
        $properties = [];
        
        $isList = $this->getCachedIsList($io, $namespace, $objectName, $data);
        
        if ($isList) {
            $isArrayItemObject = count(array_filter($data, 'is_array')) > 0;
            
            $itemName = '';
            if ($isArrayItemObject) {
                $itemName = WordHelper::singularize($objectName);
                $itemName = $this->getCachedItemName($io, $namespace, $objectName, $itemName);
            }
            
            $currentNamespace = $namespace . '\\' . $objectName;
            $type = PropertyTypeEnum::TYPE_MIXED;
            if (count($data)) {
                $mergedDatum = null;
                $data = array_filter($data);
                foreach ($data as $datum) {
                    if(!$mergedDatum){
                        $mergedDatum = $datum;
                    }
                    if (is_array($datum)) {
                        $mergedDatum = ArrayHelper::mergeArrays($mergedDatum, $datum);
                    }
                }
                $type = $this->convert($io, $mergedDatum, $currentNamespace, $itemName, $outputDir, $uniqueId);
            }
            if ($type) {
                $type = $type . '[]';
            }
        } else {
            foreach ($data as $key => $value) {
                $subId = implode('_', [$uniqueId, $key]);
                if (empty($this->types[$subId]) || $this->types[$subId] == PropertyTypeEnum::TYPE_STRING) {
                    $propertyName = WordHelper::pascalCase($key);
                    $currentNamespace = $namespace . '\\' . $objectName;
                    $this->types[$subId] = $this->convert($io, $value, $currentNamespace, $propertyName, $outputDir, $subId);
                    $t = $this->types[$subId];
                    $isArray = false;
                    if (preg_match("#\[\]$#is", $t)) {
                        $t = str_replace("[]", "", $t);
                        $isArray = true;
                    }
                    if ($propertyName == 'Match') {
                        $propertyName = 'PMatch';
                    }
                    $property = new Property(
                        $propertyName,
                        $key,
                        $t,
                        $isArray
                    );
                    $properties[$subId] = $property;
                }
            }
            
            if ($objectName == 'Match') {
                $objectName = 'PMatch';
            }
            $class = new ClassObj($namespace, $objectName, $properties);
            $class->setIsList($isList);
            $this->writeClass($class, $finalOutputDir);
            $type = $namespace . '\\' . $objectName;
        }
        return $type;
    }
    
    private function getType($value)
    {
        $type = PropertyTypeEnum::TYPE_STRING;
        
        if (is_string($value)) {
            $type = PropertyTypeEnum::TYPE_STRING;
        }
        
        if (is_int($value)) {
            $type = PropertyTypeEnum::TYPE_INTEGER;
        }
        
        if (is_bool($value)) {
            $type = PropertyTypeEnum::TYPE_BOOLEAN;
        }
        
        if (is_array($value)) {
            $type = PropertyTypeEnum::TYPE_ARRAY;
        }
        
        if (is_object($value)) {
            $type = PropertyTypeEnum::TYPE_OBJECT;
        }
        return $type;
    }
    
    private function writeClass(ClassObj $class, $outputDir)
    {
        $template = "Dynamic/class.twig";
        $objectName = $class->getUcName();
        $outputPath = rtrim($outputDir, "/") . '/' . $objectName . '.php';
        $content = $this->twig->render($template, [
            'class'         => $class,
            'default_types' => PropertyTypeEnum::getTypes(),
        ]);
        file_put_contents($outputPath, $content);
    }
    
    private function getKey($namespace, $objectName)
    {
        $slugify = new Slugify();
        return $slugify->slugify($namespace . $objectName);
    }
    
    private function getCachedIsList(SymfonyStyle $io, $namespace, $objectName, $data)
    {
        $key = implode('_', [$namespace, $objectName, 'is_list']);
        $isList = $this->getCacheValue($key);
        if (is_null($isList)) {
            $default = array_is_list($data);
            do {
                $io->writeln("Object: " . $namespace . "\\" . $objectName . " - Keys: " . implode(', ', array_keys($data)));
                $defaultString = $default ? 'Y/n' : 'y/N';
                $isList = $io->ask("Is $objectName a list? [$defaultString]", $default ? 'Y' : 'N');
            } while (!in_array($isList, ['y', 'n', 'Y', 'N']));
            $isList = in_array($isList, ['y', 'Y']);
            $this->setCacheValue($key, $isList);
        }
        return $isList;
    }
    
    private function getCachedItemName(SymfonyStyle $io, $namespace, $objectName, $itemName)
    {
        $key = implode('_', [$namespace, $objectName, 'item_name']);
        $v = $this->getCacheValue($key);
        if (is_null($v)) {
            $io->writeln("Object: " . $namespace . "\\" . $objectName);
            $v = $io->ask("What is the name of the item? ", $itemName);
            $this->setCacheValue($key, $v);
        }
        return $v;
    }
    
    private function getCacheValue($key)
    {
        if (empty($this->cachePath)) {
            return null;
        }
        if (!file_exists($this->cachePath)) {
            return null;
        }
        $content = file_get_contents($this->cachePath);
        $json = json_decode($content, true);
        if (!array_key_exists($key, $json)) {
            return null;
        }
        return $json[$key];
    }
    
    private function setCacheValue($key, $value)
    {
        if (empty($this->cachePath)) {
            return;
        }
        if (!file_exists($this->cachePath)) {
            file_put_contents($this->cachePath, json_encode([]));
        }
        $content = file_get_contents($this->cachePath);
        $json = json_decode($content, true);
        $json[$key] = $value;
        file_put_contents($this->cachePath, json_encode($json, JSON_PRETTY_PRINT));
    }
}