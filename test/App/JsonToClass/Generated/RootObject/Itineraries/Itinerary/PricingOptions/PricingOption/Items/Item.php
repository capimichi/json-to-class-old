<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Item
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Item
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("agent_id")
     */
    protected $agentId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("url")
     */
    protected $url;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("segment_ids")
     */
    protected $segmentIds;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Price|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Price")
     * @Serializer\SerializedName("price")
     */
    protected $price;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("booking_proposition")
     */
    protected $bookingProposition;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transfer_protection")
     */
    protected $transferProtection;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("max_redirect_age")
     */
    protected $maxRedirectAge;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Fares\Fare[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Fares\Fare>")
     * @Serializer\SerializedName("fares")
     */
    protected $fares;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("opaque_id")
     */
    protected $opaqueId;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\BookingMetadata|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\BookingMetadata")
     * @Serializer\SerializedName("booking_metadata")
     */
    protected $bookingMetadata;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\TicketAttributes|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\TicketAttributes")
     * @Serializer\SerializedName("ticket_attributes")
     */
    protected $ticketAttributes;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\FlightAttributes|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\FlightAttributes")
     * @Serializer\SerializedName("flight_attributes")
     */
    protected $flightAttributes;

    /**
     * @return string|null
     */
    public function getAgentId()
    {
        return $this->agentId;
}

/**
* @param string|null $agentId
*/
public function setAgentId($agentId)
{
$this->agentId = $agentId;
}

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
}

/**
* @param string|null $url
*/
public function setUrl($url)
{
$this->url = $url;
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
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Price|null
     */
    public function getPrice()
    {
        return $this->price;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Price|null $price
*/
public function setPrice($price)
{
$this->price = $price;
}

    /**
     * @return string|null
     */
    public function getBookingProposition()
    {
        return $this->bookingProposition;
}

/**
* @param string|null $bookingProposition
*/
public function setBookingProposition($bookingProposition)
{
$this->bookingProposition = $bookingProposition;
}

    /**
     * @return string|null
     */
    public function getTransferProtection()
    {
        return $this->transferProtection;
}

/**
* @param string|null $transferProtection
*/
public function setTransferProtection($transferProtection)
{
$this->transferProtection = $transferProtection;
}

    /**
     * @return int|null
     */
    public function getMaxRedirectAge()
    {
        return $this->maxRedirectAge;
}

/**
* @param int|null $maxRedirectAge
*/
public function setMaxRedirectAge($maxRedirectAge)
{
$this->maxRedirectAge = $maxRedirectAge;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Fares\Fare[]|null
     */
    public function getFares()
    {
        return $this->fares;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\Fares\Fare[]|null $fares
*/
public function setFares($fares)
{
$this->fares = $fares;
}

    /**
     * @return string|null
     */
    public function getOpaqueId()
    {
        return $this->opaqueId;
}

/**
* @param string|null $opaqueId
*/
public function setOpaqueId($opaqueId)
{
$this->opaqueId = $opaqueId;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\BookingMetadata|null
     */
    public function getBookingMetadata()
    {
        return $this->bookingMetadata;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\BookingMetadata|null $bookingMetadata
*/
public function setBookingMetadata($bookingMetadata)
{
$this->bookingMetadata = $bookingMetadata;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\TicketAttributes|null
     */
    public function getTicketAttributes()
    {
        return $this->ticketAttributes;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\TicketAttributes|null $ticketAttributes
*/
public function setTicketAttributes($ticketAttributes)
{
$this->ticketAttributes = $ticketAttributes;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\FlightAttributes|null
     */
    public function getFlightAttributes()
    {
        return $this->flightAttributes;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption\Items\Item\FlightAttributes|null $flightAttributes
*/
public function setFlightAttributes($flightAttributes)
{
$this->flightAttributes = $flightAttributes;
}


}