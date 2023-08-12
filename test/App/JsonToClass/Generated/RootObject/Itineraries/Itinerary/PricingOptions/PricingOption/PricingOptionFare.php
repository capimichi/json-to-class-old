<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class PricingOptionFare
 *
 * @Serializer\ExclusionPolicy("none")
 */
class PricingOptionFare
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\AttributeLabels|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\AttributeLabels")
     * @Serializer\SerializedName("attribute_labels")
     */
    protected $attributeLabels;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("details_type")
     */
    protected $detailsType;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\LegDetails|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\LegDetails")
     * @Serializer\SerializedName("leg_details")
     */
    protected $legDetails;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\AttributeLabels|null
     */
    public function getAttributeLabels()
    {
        return $this->attributeLabels;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\AttributeLabels|null $attributeLabels
*/
public function setAttributeLabels($attributeLabels)
{
$this->attributeLabels = $attributeLabels;
}

    /**
     * @return string|null
     */
    public function getDetailsType()
    {
        return $this->detailsType;
}

/**
* @param string|null $detailsType
*/
public function setDetailsType($detailsType)
{
$this->detailsType = $detailsType;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\LegDetails|null
     */
    public function getLegDetails()
    {
        return $this->legDetails;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\PricingOptionFare\LegDetails|null $legDetails
*/
public function setLegDetails($legDetails)
{
$this->legDetails = $legDetails;
}


}