<?php

namespace App\JsonToClass\Generated\RootObject\Query\Legs;

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
     * @Serializer\SerializedName("origin")
     */
    protected $origin;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("alternative_origins")
     */
    protected $alternativeOrigins;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("destination")
     */
    protected $destination;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("alternative_destinations")
     */
    protected $alternativeDestinations;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("date")
     */
    protected $date;

    /**
     * @return int|null
     */
    public function getOrigin()
    {
        return $this->origin;
}

/**
* @param int|null $origin
*/
public function setOrigin($origin)
{
$this->origin = $origin;
}

    /**
     * @return \mixed[]|null
     */
    public function getAlternativeOrigins()
    {
        return $this->alternativeOrigins;
}

/**
* @param \mixed[]|null $alternativeOrigins
*/
public function setAlternativeOrigins($alternativeOrigins)
{
$this->alternativeOrigins = $alternativeOrigins;
}

    /**
     * @return int|null
     */
    public function getDestination()
    {
        return $this->destination;
}

/**
* @param int|null $destination
*/
public function setDestination($destination)
{
$this->destination = $destination;
}

    /**
     * @return \mixed[]|null
     */
    public function getAlternativeDestinations()
    {
        return $this->alternativeDestinations;
}

/**
* @param \mixed[]|null $alternativeDestinations
*/
public function setAlternativeDestinations($alternativeDestinations)
{
$this->alternativeDestinations = $alternativeDestinations;
}

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
}

/**
* @param string|null $date
*/
public function setDate($date)
{
$this->date = $date;
}


}