<?php

namespace App\JsonToClass\Generated\RootObject\Segments;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Segment
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Segment
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("origin_place_id")
     */
    protected $originPlaceId;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("destination_place_id")
     */
    protected $destinationPlaceId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("arrival")
     */
    protected $arrival;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("departure")
     */
    protected $departure;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("duration")
     */
    protected $duration;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("marketing_flight_number")
     */
    protected $marketingFlightNumber;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("marketing_carrier_id")
     */
    protected $marketingCarrierId;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("operating_carrier_id")
     */
    protected $operatingCarrierId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("mode")
     */
    protected $mode;

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
     * @return int|null
     */
    public function getOriginPlaceId()
    {
        return $this->originPlaceId;
}

/**
* @param int|null $originPlaceId
*/
public function setOriginPlaceId($originPlaceId)
{
$this->originPlaceId = $originPlaceId;
}

    /**
     * @return int|null
     */
    public function getDestinationPlaceId()
    {
        return $this->destinationPlaceId;
}

/**
* @param int|null $destinationPlaceId
*/
public function setDestinationPlaceId($destinationPlaceId)
{
$this->destinationPlaceId = $destinationPlaceId;
}

    /**
     * @return string|null
     */
    public function getArrival()
    {
        return $this->arrival;
}

/**
* @param string|null $arrival
*/
public function setArrival($arrival)
{
$this->arrival = $arrival;
}

    /**
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->departure;
}

/**
* @param string|null $departure
*/
public function setDeparture($departure)
{
$this->departure = $departure;
}

    /**
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
}

/**
* @param int|null $duration
*/
public function setDuration($duration)
{
$this->duration = $duration;
}

    /**
     * @return string|null
     */
    public function getMarketingFlightNumber()
    {
        return $this->marketingFlightNumber;
}

/**
* @param string|null $marketingFlightNumber
*/
public function setMarketingFlightNumber($marketingFlightNumber)
{
$this->marketingFlightNumber = $marketingFlightNumber;
}

    /**
     * @return int|null
     */
    public function getMarketingCarrierId()
    {
        return $this->marketingCarrierId;
}

/**
* @param int|null $marketingCarrierId
*/
public function setMarketingCarrierId($marketingCarrierId)
{
$this->marketingCarrierId = $marketingCarrierId;
}

    /**
     * @return int|null
     */
    public function getOperatingCarrierId()
    {
        return $this->operatingCarrierId;
}

/**
* @param int|null $operatingCarrierId
*/
public function setOperatingCarrierId($operatingCarrierId)
{
$this->operatingCarrierId = $operatingCarrierId;
}

    /**
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
}

/**
* @param string|null $mode
*/
public function setMode($mode)
{
$this->mode = $mode;
}


}