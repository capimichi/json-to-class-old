<?php

namespace Michi\JsonToClass\Model;

use Michi\JsonToClass\Enum\PropertyTypeEnum;

class Property
{
    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var string
     */
    protected string $key;
    
    /**
     * @var string
     */
    protected $type;
    
    /**
     * @var bool
     */
    protected $isArray;
    
    /**
     * Property constructor.
     *
     * @param string $name
     * @param string $key
     * @param string $type
     * @param bool   $isArray
     */
    public function __construct(string $name, string $key, string $type, bool $isArray)
    {
        $this->name = $name;
        $this->key = $key;
        $this->type = $type;
        $this->isArray = $isArray;
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
        
        // remove everything but letters and numbers
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
        
        // remove numbers from the beginning of the string
        $name = preg_replace('/^[0-9]+/', '', $name);
        
        return $name;
    }
    
    /**
     * @return string
     */
    public function getCleanName()
    {
        return lcfirst($this->getUcName());
    }
    
    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    
    /**
     * @param string $key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function getCleanType()
    {
        $type = $this->getType();
        if (in_array($type, PropertyTypeEnum::getTypes())) {
            return $type;
        }
        return "\\" . $type;
    }
    
    /**
     * @return bool
     */
    public function isArray(): bool
    {
        return $this->isArray;
    }
    
    /**
     * @param bool $isArray
     */
    public function setIsArray(bool $isArray): void
    {
        $this->isArray = $isArray;
    }
    
    
}