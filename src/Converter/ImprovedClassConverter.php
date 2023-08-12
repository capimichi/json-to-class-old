<?php

namespace Michi\JsonToClass\Converter;

use Adbar\Dot;
use Cocur\Slugify\Slugify;
use Michi\JsonToClass\Enum\PropertyTypeEnum;
use Michi\JsonToClass\Helper\WordHelper;
use Michi\JsonToClass\Model\ClassObj;
use Michi\JsonToClass\Model\Property;
use Twig\Environment;

class ImprovedClassConverter
{
    
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
    }
    
    
    public function convert($data, $namespace, $objectName, $attributePath, $isList, $outputDir)
    {
        $finalOutputDir = rtrim($outputDir, "/") . '/' . str_replace('\\', '/', $namespace);
        if (!is_dir($finalOutputDir)) {
            mkdir($finalOutputDir, 0777, true);
        }
        
        if (!empty($attributePath)) {
            $dotData = new Dot($data);
            $data = $dotData->get($attributePath);
        }
        
        $properties = [];
        
        foreach ($data as $key => $value) {
        
        }
        
        $class = new ClassObj($namespace, $objectName, $properties);
        $class->setIsList($isList);
        $this->writeClass($class, $finalOutputDir);
        return $namespace . '\\' . $objectName;
    }
    
    private function getType($value)
    {
        $type = PropertyTypeEnum::TYPE_MIXED;
        
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