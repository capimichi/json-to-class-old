<?php

namespace Michi\JsonToClass\Model;

use Michi\JsonToClass\Enum\PropertyTypeEnum;

class ClassObj
{
    /**
     * @var string
     */
    protected $namespace;
    
    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var array
     */
    protected $properties = [];
    
    /**
     * @var bool
     */
    protected $isList;
    
    /**
     * @var string
     */
    protected $listType;
    
    /**
     * ClassObj constructor.
     *
     * @param string $namespace
     * @param string $name
     * @param array  $properties
     */
    public function __construct($namespace, $name, array $properties)
    {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->properties = $properties;
    }
    
    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
    
    /**
     * @param string $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getUcName()
    {
        $name = $this->getName();
        $name = explode('_', $name);
        $name = implode(' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        
        return $name;
    }
    
    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }
    
    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }
    
    /**
     * @return bool
     */
    public function isList(): bool
    {
        return $this->isList;
    }
    
    /**
     * @param bool $isList
     */
    public function setIsList(bool $isList): void
    {
        $this->isList = $isList;
    }
    
    /**
     * @return string
     */
    public function getListType(): string
    {
        return $this->listType;
    }
    
    /**
     * @param string $listType
     */
    public function setListType(string $listType): void
    {
        $this->listType = $listType;
    }
    
    public function getCleanListType()
    {
        $type = $this->getListType();
        if (in_array($type, PropertyTypeEnum::getTypes())) {
            return $type;
        }
        return "\\" . $type;
    }
    
    
    
    
}