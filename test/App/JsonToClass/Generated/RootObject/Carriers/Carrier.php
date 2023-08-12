<?php

namespace App\JsonToClass\Generated\RootObject\Carriers;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Carrier
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Carrier
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("alt_id")
     */
    protected $altId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("display_code")
     */
    protected $displayCode;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("display_code_type")
     */
    protected $displayCodeType;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("alliance")
     */
    protected $alliance;

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

    /**
     * @return string|null
     */
    public function getDisplayCodeType()
    {
        return $this->displayCodeType;
}

/**
* @param string|null $displayCodeType
*/
public function setDisplayCodeType($displayCodeType)
{
$this->displayCodeType = $displayCodeType;
}

    /**
     * @return int|null
     */
    public function getAlliance()
    {
        return $this->alliance;
}

/**
* @param int|null $alliance
*/
public function setAlliance($alliance)
{
$this->alliance = $alliance;
}


}