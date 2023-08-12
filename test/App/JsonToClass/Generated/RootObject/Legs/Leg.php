<?php

namespace App\JsonToClass\Generated\RootObject\Legs;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Leg
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Leg
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
     * @Serializer\SerializedName("departure")
     */
    protected $departure;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("arrival")
     */
    protected $arrival;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("segment_ids")
     */
    protected $segmentIds;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("duration")
     */
    protected $duration;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("stop_count")
     */
    protected $stopCount;

    /**
     * @var int[]|null
     * @Serializer\Type("array<int>")
     * @Serializer\SerializedName("marketing_carrier_ids")
     */
    protected $marketingCarrierIds;

    /**
     * @var int[]|null
     * @Serializer\Type("array<int>")
     * @Serializer\SerializedName("operating_carrier_ids")
     */
    protected $operatingCarrierIds;

    /**
     * @var int[]|null
     * @Serializer\Type("array<int>")
     * @Serializer\SerializedName("stop_ids")
     */
    protected $stopIds;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("self_transfer")
     */
    protected $selfTransfer;

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
     * @return string[]|null
     */
    public function getSegmentIds()
    {
        return $this->segmentIds;
}

/**
* @param string[]|null $segmentIds
*/
public function setSegmentIds($segmentIds)
{
$this->segmentIds = $segmentIds;
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
     * @return int|null
     */
    public function getStopCount()
    {
        return $this->stopCount;
}

/**
* @param int|null $stopCount
*/
public function setStopCount($stopCount)
{
$this->stopCount = $stopCount;
}

    /**
     * @return int[]|null
     */
    public function getMarketingCarrierIds()
    {
        return $this->marketingCarrierIds;
}

/**
* @param int[]|null $marketingCarrierIds
*/
public function setMarketingCarrierIds($marketingCarrierIds)
{
$this->marketingCarrierIds = $marketingCarrierIds;
}

    /**
     * @return int[]|null
     */
    public function getOperatingCarrierIds()
    {
        return $this->operatingCarrierIds;
}

/**
* @param int[]|null $operatingCarrierIds
*/
public function setOperatingCarrierIds($operatingCarrierIds)
{
$this->operatingCarrierIds = $operatingCarrierIds;
}

    /**
     * @return int[]|null
     */
    public function getStopIds()
    {
        return $this->stopIds;
}

/**
* @param int[]|null $stopIds
*/
public function setStopIds($stopIds)
{
$this->stopIds = $stopIds;
}

    /**
     * @return bool|null
     */
    public function getSelfTransfer()
    {
        return $this->selfTransfer;
}

/**
* @param bool|null $selfTransfer
*/
public function setSelfTransfer($selfTransfer)
{
$this->selfTransfer = $selfTransfer;
}


}