<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Itinerary
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Itinerary
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
     * @Serializer\SerializedName("leg_ids")
     */
    protected $legIds;
    
    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption>")
     * @Serializer\SerializedName("pricing_options")
     */
    protected $pricingOptions;
    
    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("score")
     */
    protected $score;
    
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
    public function getLegIds()
    {
        return $this->legIds;
    }
    
    /**
     * @param string[]|null $legIds
     */
    public function setLegIds($legIds)
    {
        $this->legIds = $legIds;
    }
    
    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption[]|null
     */
    public function getPricingOptions()
    {
        return $this->pricingOptions;
    }
    
    /**
     * @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption[]|null $pricingOptions
     */
    public function setPricingOptions($pricingOptions)
    {
        $this->pricingOptions = $pricingOptions;
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
    
    
}