<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Fares;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Fare
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Fare
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("segment_id")
     */
    protected $segmentId;

    /**
     * @return string|null
     */
    public function getSegmentId()
    {
        return $this->segmentId;
}

/**
* @param string|null $segmentId
*/
public function setSegmentId($segmentId)
{
$this->segmentId = $segmentId;
}


}