<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PricingOption
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PricingOption
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("agent_ids")
     */
    protected $agentIds;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Price|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Price")
     * @Serializer\SerializedName("price")
     */
    protected $price;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unpriced_type")
     */
    protected $unpricedType;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item>")
     * @Serializer\SerializedName("items")
     */
    protected $items;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transfer_type")
     */
    protected $transferType;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("score")
     */
    protected $score;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare")
     * @Serializer\SerializedName("pricing_option_fare")
     */
    protected $pricingOptionFare;

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
}

/**
* @param string|null $id
*/
public function setId($id)
{
$this->id = $id;
}

    /**
     * @return string[]|null
     */
    public function getAgentIds()
    {
        return $this->agentIds;
}

/**
* @param string[]|null $agentIds
*/
public function setAgentIds($agentIds)
{
$this->agentIds = $agentIds;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Price|null
     */
    public function getPrice()
    {
        return $this->price;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Price|null $price
*/
public function setPrice($price)
{
$this->price = $price;
}

    /**
     * @return string|null
     */
    public function getUnpricedType()
    {
        return $this->unpricedType;
}

/**
* @param string|null $unpricedType
*/
public function setUnpricedType($unpricedType)
{
$this->unpricedType = $unpricedType;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item[]|null
     */
    public function getItems()
    {
        return $this->items;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item[]|null $items
*/
public function setItems($items)
{
$this->items = $items;
}

    /**
     * @return string|null
     */
    public function getTransferType()
    {
        return $this->transferType;
}

/**
* @param string|null $transferType
*/
public function setTransferType($transferType)
{
$this->transferType = $transferType;
}

    /**
     * @return \mixed|null
     */
    public function getScore()
    {
        return $this->score;
}

/**
* @param \mixed|null $score
*/
public function setScore($score)
{
$this->score = $score;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare|null
     */
    public function getPricingOptionFare()
    {
        return $this->pricingOptionFare;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare|null $pricingOptionFare
*/
public function setPricingOptionFare($pricingOptionFare)
{
$this->pricingOptionFare = $pricingOptionFare;
}


}