<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Stops
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Stops
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct")
     * @Serializer\SerializedName("direct")
     */
    protected $direct;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop")
     * @Serializer\SerializedName("one_stop")
     */
    protected $oneStop;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops")
     * @Serializer\SerializedName("two_plus_stops")
     */
    protected $twoPlusStops;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct|null
     */
    public function getDirect()
    {
        return $this->direct;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct|null $direct
*/
public function setDirect($direct)
{
$this->direct = $direct;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop|null
     */
    public function getOneStop()
    {
        return $this->oneStop;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop|null $oneStop
*/
public function setOneStop($oneStop)
{
$this->oneStop = $oneStop;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops|null
     */
    public function getTwoPlusStops()
    {
        return $this->twoPlusStops;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops|null $twoPlusStops
*/
public function setTwoPlusStops($twoPlusStops)
{
$this->twoPlusStops = $twoPlusStops;
}


}