<?php

namespace App\JsonToClass\Generated\RootObject;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Stats
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Stats
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries")
     * @Serializer\SerializedName("itineraries")
     */
    protected $itineraries;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Stats\Legs\Leg>")
     * @Serializer\SerializedName("legs")
     */
    protected $legs;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Carriers|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Carriers")
     * @Serializer\SerializedName("carriers")
     */
    protected $carriers;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\FilterHints|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\FilterHints")
     * @Serializer\SerializedName("filter_hints")
     */
    protected $filterHints;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries|null
     */
    public function getItineraries()
    {
        return $this->itineraries;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries|null $itineraries
*/
public function setItineraries($itineraries)
{
$this->itineraries = $itineraries;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg[]|null
     */
    public function getLegs()
    {
        return $this->legs;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg[]|null $legs
*/
public function setLegs($legs)
{
$this->legs = $legs;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Carriers|null
     */
    public function getCarriers()
    {
        return $this->carriers;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Carriers|null $carriers
*/
public function setCarriers($carriers)
{
$this->carriers = $carriers;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\FilterHints|null
     */
    public function getFilterHints()
    {
        return $this->filterHints;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\FilterHints|null $filterHints
*/
public function setFilterHints($filterHints)
{
$this->filterHints = $filterHints;
}


}