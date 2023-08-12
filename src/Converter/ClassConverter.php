<?php

namespace Michi\JsonToClass\Converter;

use Cocur\Slugify\Slugify;
use Michi\JsonToClass\Enum\PropertyTypeEnum;
use Michi\JsonToClass\Helper\WordHelper;
use Michi\JsonToClass\Model\ClassObj;
use Michi\JsonToClass\Model\Property;
use Twig\Environment;

class ClassConverter
{
    
    /**
     * @var array
     */
    protected $sessionTypes;
    
    /**
     * @var Environment
     */
    protected $twig;
    
    /**
     * ClassConverter constructor.
     *
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
        
        
        $this->sessionTypes = [];
    }
    
    
    public function convert($data, $namespace, $objectName, $outputDir)
    {
        // clean object name
        // remove everything but letters and numbers
        $objectName = preg_replace('/[^a-zA-Z0-9]/', '', $objectName);
        // remove numbers from the beginning of the string
        $objectName = preg_replace('/^[0-9]+/', '', $objectName);
        
        if($namespace== 'App\SkyScanner\SearchResponse\Plugins\Plugin'){
            if($objectName == 'Itineraries'){
                $a = 1;
            }
        }
        
        $k = $this->getKey($namespace, $objectName);
        
        if (!is_array($data)) {
            $this->sessionTypes[$k] = $this->getType($data, $k);
            return $this->sessionTypes[$k];
        }
    
        $finalOutputDir = rtrim($outputDir, "/") . '/' . str_replace('\\', '/', $namespace);
        if (!is_dir($finalOutputDir)) {
            mkdir($finalOutputDir, 0777, true);
        }
        
        $properties = [];
        
        $finalListType = "";
        if (array_is_list($data)) {
            $isList = true;
            $listTypes = [];
            foreach ($data as $key => $item) {
                $beautyKeyName = WordHelper::pascalCase($key);
                $beautyKeyNameSingular = WordHelper::singularize($objectName);
                $currentNamespace = $namespace . '\\' . $objectName;
                
                if($beautyKeyNameSingular == $objectName){
                    $beautyKeyNameSingular = 'Item';
                }
                
//                $keyK = $this->getKey($namespace, $beautyKeyNameSingular);
//                $keyType = $this->getType($item, $keyK);
//                $this->sessionTypes[$keyK] = $keyType;
                $listTypes[$key] = $this->convert($item, $currentNamespace, $beautyKeyNameSingular, $outputDir);
                $finalListType = $listTypes[$key];
            }
//            $listType = count($listTypes) ? array_pop($listTypes) : PropertyTypeEnum::TYPE_MIXED;
        } else {
            $isList = false;
            foreach ($data as $key => $item) {
                $beautyKeyName = WordHelper::pascalCase($key);
//            $beautyKeyNameSingular = WordHelper::singularize($beautyKeyName);
    
                $currentNamespace = $namespace . '\\' . $objectName;
    
                $type = $this->convert($item, $currentNamespace, $beautyKeyName, $outputDir);
        
                $property = new Property($key, $type);
                $properties[] = $property;
            }
        }
        
        $class = new ClassObj($namespace, $objectName, $properties);
        $class->setIsList($isList);
        $class->setListType($finalListType);
        $this->writeClass($class, $finalOutputDir);
        return $namespace . '\\' . $objectName;
    }
    
    private function getType($value, $key = null)
    {
        $oldType = null;
        if (isset($this->sessionTypes[$key])) {
            $oldType = $this->sessionTypes[$key];
        }
        
        $newType = null;
        if (is_string($value)) {
            $newType = PropertyTypeEnum::TYPE_STRING;
        }
        
        if (is_int($value)) {
            $newType = PropertyTypeEnum::TYPE_INTEGER;
        }
        
        if (is_bool($value)) {
            $newType = PropertyTypeEnum::TYPE_BOOLEAN;
        }
        
        if (is_array($value)) {
            $newType = PropertyTypeEnum::TYPE_ARRAY;
        }
        
        if (is_object($value)) {
            $newType = PropertyTypeEnum::TYPE_OBJECT;
        }
        
        if (!is_null($oldType) && is_null($newType)) {
            $newType = $oldType;
        }
        
        if (is_int($oldType) && is_float($newType)) {
            $newType = PropertyTypeEnum::TYPE_FLOAT;
        }
        
        if (is_string($oldType) && !is_string($newType) && !is_null($newType)) {
            $newType = PropertyTypeEnum::TYPE_MIXED;
        }
        
        if (is_null($newType)) {
            $newType = PropertyTypeEnum::TYPE_MIXED;
        }
        
        return $newType;
    }
    
    private function writeClass(ClassObj $class, $outputDir)
    {
        $template = "Class/" . ($class->isList() ? 'list.twig' : 'class.twig');
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
}