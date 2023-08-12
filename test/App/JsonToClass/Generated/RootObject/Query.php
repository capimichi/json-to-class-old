<?php

namespace App\JsonToClass\Generated\RootObject;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Query
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Query
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("market")
     */
    protected $market;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    protected $currency;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("locale")
     */
    protected $locale;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("adults")
     */
    protected $adults;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("child_ages")
     */
    protected $childAges;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cabin_class")
     */
    protected $cabinClass;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Query\Legs\Leg[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Query\Legs\Leg>")
     * @Serializer\SerializedName("legs")
     */
    protected $legs;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("children")
     */
    protected $children;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("infants")
     */
    protected $infants;

    /**
     * @return string|null
     */
    public function getMarket()
    {
        return $this->market;
}

/**
* @param string|null $market
*/
public function setMarket($market)
{
$this->market = $market;
}

    /**
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
}

/**
* @param string|null $currency
*/
public function setCurrency($currency)
{
$this->currency = $currency;
}

    /**
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
}

/**
* @param string|null $locale
*/
public function setLocale($locale)
{
$this->locale = $locale;
}

    /**
     * @return int|null
     */
    public function getAdults()
    {
        return $this->adults;
}

/**
* @param int|null $adults
*/
public function setAdults($adults)
{
$this->adults = $adults;
}

    /**
     * @return \mixed[]|null
     */
    public function getChildAges()
    {
        return $this->childAges;
}

/**
* @param \mixed[]|null $childAges
*/
public function setChildAges($childAges)
{
$this->childAges = $childAges;
}

    /**
     * @return string|null
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
}

/**
* @param string|null $cabinClass
*/
public function setCabinClass($cabinClass)
{
$this->cabinClass = $cabinClass;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Query\Legs\Leg[]|null
     */
    public function getLegs()
    {
        return $this->legs;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Query\Legs\Leg[]|null $legs
*/
public function setLegs($legs)
{
$this->legs = $legs;
}

    /**
     * @return int|null
     */
    public function getChildren()
    {
        return $this->children;
}

/**
* @param int|null $children
*/
public function setChildren($children)
{
$this->children = $children;
}

    /**
     * @return int|null
     */
    public function getInfants()
    {
        return $this->infants;
}

/**
* @param int|null $infants
*/
public function setInfants($infants)
{
$this->infants = $infants;
}


}