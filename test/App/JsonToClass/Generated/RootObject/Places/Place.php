<?php

namespace App\JsonToClass\Generated\RootObject\Places;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Place
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Place
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("entity_id")
     */
    protected $entityId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("alt_id")
     */
    protected $altId;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("parent_id")
     */
    protected $parentId;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("parent_entity_id")
     */
    protected $parentEntityId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    protected $type;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("display_code")
     */
    protected $displayCode;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
}

/**
* @param int|null $id
*/
public function setId($id)
{
$this->id = $id;
}

    /**
     * @return int|null
     */
    public function getEntityId()
    {
        return $this->entityId;
}

/**
* @param int|null $entityId
*/
public function setEntityId($entityId)
{
$this->entityId = $entityId;
}

    /**
     * @return string|null
     */
    public function getAltId()
    {
        return $this->altId;
}

/**
* @param string|null $altId
*/
public function setAltId($altId)
{
$this->altId = $altId;
}

    /**
     * @return int|null
     */
    public function getParentId()
    {
        return $this->parentId;
}

/**
* @param int|null $parentId
*/
public function setParentId($parentId)
{
$this->parentId = $parentId;
}

    /**
     * @return int|null
     */
    public function getParentEntityId()
    {
        return $this->parentEntityId;
}

/**
* @param int|null $parentEntityId
*/
public function setParentEntityId($parentEntityId)
{
$this->parentEntityId = $parentEntityId;
}

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
}

/**
* @param string|null $name
*/
public function setName($name)
{
$this->name = $name;
}

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
}

/**
* @param string|null $type
*/
public function setType($type)
{
$this->type = $type;
}

    /**
     * @return string|null
     */
    public function getDisplayCode()
    {
        return $this->displayCode;
}

/**
* @param string|null $displayCode
*/
public function setDisplayCode($displayCode)
{
$this->displayCode = $displayCode;
}


}