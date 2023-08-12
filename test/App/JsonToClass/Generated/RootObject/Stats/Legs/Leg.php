<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Legs;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Leg
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Leg
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("index")
     */
    protected $index;

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
     * @Serializer\SerializedName("count")
     */
    protected $count;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Origins\Origin[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Origins\Origin>")
     * @Serializer\SerializedName("origins")
     */
    protected $origins;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Destinations\Destination[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Destinations\Destination>")
     * @Serializer\SerializedName("destinations")
     */
    protected $destinations;

    /**
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
}

/**
* @param int|null $index
*/
public function setIndex($index)
{
$this->index = $index;
}

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
    public function getCount()
    {
        return $this->count;
}

/**
* @param int|null $count
*/
public function setCount($count)
{
$this->count = $count;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Origins\Origin[]|null
     */
    public function getOrigins()
    {
        return $this->origins;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Origins\Origin[]|null $origins
*/
public function setOrigins($origins)
{
$this->origins = $origins;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Destinations\Destination[]|null
     */
    public function getDestinations()
    {
        return $this->destinations;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Destinations\Destination[]|null $destinations
*/
public function setDestinations($destinations)
{
$this->destinations = $destinations;
}


}