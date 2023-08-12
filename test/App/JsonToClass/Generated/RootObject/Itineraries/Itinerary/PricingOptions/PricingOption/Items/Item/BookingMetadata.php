<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BookingMetadata
 *
 * @Serializer\ExclusionPolicy("none")
 */
class BookingMetadata
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("metadata_set")
     */
    protected $metadataSet;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("signature")
     */
    protected $signature;

    /**
     * @return string|null
     */
    public function getMetadataSet()
    {
        return $this->metadataSet;
}

/**
* @param string|null $metadataSet
*/
public function setMetadataSet($metadataSet)
{
$this->metadataSet = $metadataSet;
}

    /**
     * @return string|null
     */
    public function getSignature()
    {
        return $this->signature;
}

/**
* @param string|null $signature
*/
public function setSignature($signature)
{
$this->signature = $signature;
}


}