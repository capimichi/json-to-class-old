<?php

namespace App\JsonToClass\Generated\RootObject\Stats;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Itineraries
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Itineraries
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("min_duration")
     */
    protected $minDuration;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("max_duration")
     */
    protected $maxDuration;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("min_longest_itinerary_leg_duration")
     */
    protected $minLongestItineraryLegDuration;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("max_longest_itinerary_leg_duration")
     */
    protected $maxLongestItineraryLegDuration;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Total|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Total")
     * @Serializer\SerializedName("total")
     */
    protected $total;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops")
     * @Serializer\SerializedName("stops")
     */
    protected $stops;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares")
     * @Serializer\SerializedName("fares")
     */
    protected $fares;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("has_change_airport_transfer")
     */
    protected $hasChangeAirportTransfer;

    /**
     * @return int|null
     */
    public function getMinDuration()
    {
        return $this->minDuration;
}

/**
* @param int|null $minDuration
*/
public function setMinDuration($minDuration)
{
$this->minDuration = $minDuration;
}

    /**
     * @return int|null
     */
    public function getMaxDuration()
    {
        return $this->maxDuration;
}

/**
* @param int|null $maxDuration
*/
public function setMaxDuration($maxDuration)
{
$this->maxDuration = $maxDuration;
}

    /**
     * @return int|null
     */
    public function getMinLongestItineraryLegDuration()
    {
        return $this->minLongestItineraryLegDuration;
}

/**
* @param int|null $minLongestItineraryLegDuration
*/
public function setMinLongestItineraryLegDuration($minLongestItineraryLegDuration)
{
$this->minLongestItineraryLegDuration = $minLongestItineraryLegDuration;
}

    /**
     * @return int|null
     */
    public function getMaxLongestItineraryLegDuration()
    {
        return $this->maxLongestItineraryLegDuration;
}

/**
* @param int|null $maxLongestItineraryLegDuration
*/
public function setMaxLongestItineraryLegDuration($maxLongestItineraryLegDuration)
{
$this->maxLongestItineraryLegDuration = $maxLongestItineraryLegDuration;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Total|null
     */
    public function getTotal()
    {
        return $this->total;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Total|null $total
*/
public function setTotal($total)
{
$this->total = $total;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops|null
     */
    public function getStops()
    {
        return $this->stops;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops|null $stops
*/
public function setStops($stops)
{
$this->stops = $stops;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares|null
     */
    public function getFares()
    {
        return $this->fares;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares|null $fares
*/
public function setFares($fares)
{
$this->fares = $fares;
}

    /**
     * @return bool|null
     */
    public function getHasChangeAirportTransfer()
    {
        return $this->hasChangeAirportTransfer;
}

/**
* @param bool|null $hasChangeAirportTransfer
*/
public function setHasChangeAirportTransfer($hasChangeAirportTransfer)
{
$this->hasChangeAirportTransfer = $hasChangeAirportTransfer;
}


}