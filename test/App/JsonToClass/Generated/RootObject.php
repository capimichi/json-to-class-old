<?php

namespace App\JsonToClass\Generated;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RootObject
 *
 * @Serializer\ExclusionPolicy("none")
 */
class RootObject
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Query|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Query")
     * @Serializer\SerializedName("query")
     */
    protected $query;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Context|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Context")
     * @Serializer\SerializedName("context")
     */
    protected $context;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Itineraries\Itinerary>")
     * @Serializer\SerializedName("itineraries")
     */
    protected $itineraries;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Legs\Leg[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Legs\Leg>")
     * @Serializer\SerializedName("legs")
     */
    protected $legs;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Segments\Segment[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Segments\Segment>")
     * @Serializer\SerializedName("segments")
     */
    protected $segments;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Places\Place[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Places\Place>")
     * @Serializer\SerializedName("places")
     */
    protected $places;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Carriers\Carrier[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Carriers\Carrier>")
     * @Serializer\SerializedName("carriers")
     */
    protected $carriers;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Alliances\Alliance[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Alliances\Alliance>")
     * @Serializer\SerializedName("alliances")
     */
    protected $alliances;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("brands")
     */
    protected $brands;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Agents\Agent[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Agents\Agent>")
     * @Serializer\SerializedName("agents")
     */
    protected $agents;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats")
     * @Serializer\SerializedName("stats")
     */
    protected $stats;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("quote_requests")
     */
    protected $quoteRequests;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("quotes")
     */
    protected $quotes;

    /**
     * @var \App\JsonToClass\Generated\RootObject\ReproUrls|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\ReproUrls")
     * @Serializer\SerializedName("repro_urls")
     */
    protected $reproUrls;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("rejected_itineraries")
     */
    protected $rejectedItineraries;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Plugins\Plugin>")
     * @Serializer\SerializedName("plugins")
     */
    protected $plugins;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Query|null
     */
    public function getQuery()
    {
        return $this->query;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Query|null $query
*/
public function setQuery($query)
{
$this->query = $query;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Context|null
     */
    public function getContext()
    {
        return $this->context;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Context|null $context
*/
public function setContext($context)
{
$this->context = $context;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary[]|null
     */
    public function getItineraries()
    {
        return $this->itineraries;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Itineraries\Itinerary[]|null $itineraries
*/
public function setItineraries($itineraries)
{
$this->itineraries = $itineraries;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Legs\Leg[]|null
     */
    public function getLegs()
    {
        return $this->legs;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Legs\Leg[]|null $legs
*/
public function setLegs($legs)
{
$this->legs = $legs;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Segments\Segment[]|null
     */
    public function getSegments()
    {
        return $this->segments;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Segments\Segment[]|null $segments
*/
public function setSegments($segments)
{
$this->segments = $segments;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Places\Place[]|null
     */
    public function getPlaces()
    {
        return $this->places;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Places\Place[]|null $places
*/
public function setPlaces($places)
{
$this->places = $places;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Carriers\Carrier[]|null
     */
    public function getCarriers()
    {
        return $this->carriers;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Carriers\Carrier[]|null $carriers
*/
public function setCarriers($carriers)
{
$this->carriers = $carriers;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Alliances\Alliance[]|null
     */
    public function getAlliances()
    {
        return $this->alliances;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Alliances\Alliance[]|null $alliances
*/
public function setAlliances($alliances)
{
$this->alliances = $alliances;
}

    /**
     * @return \mixed[]|null
     */
    public function getBrands()
    {
        return $this->brands;
}

/**
* @param \mixed[]|null $brands
*/
public function setBrands($brands)
{
$this->brands = $brands;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Agents\Agent[]|null
     */
    public function getAgents()
    {
        return $this->agents;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Agents\Agent[]|null $agents
*/
public function setAgents($agents)
{
$this->agents = $agents;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats|null
     */
    public function getStats()
    {
        return $this->stats;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats|null $stats
*/
public function setStats($stats)
{
$this->stats = $stats;
}

    /**
     * @return \mixed[]|null
     */
    public function getQuoteRequests()
    {
        return $this->quoteRequests;
}

/**
* @param \mixed[]|null $quoteRequests
*/
public function setQuoteRequests($quoteRequests)
{
$this->quoteRequests = $quoteRequests;
}

    /**
     * @return \mixed[]|null
     */
    public function getQuotes()
    {
        return $this->quotes;
}

/**
* @param \mixed[]|null $quotes
*/
public function setQuotes($quotes)
{
$this->quotes = $quotes;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\ReproUrls|null
     */
    public function getReproUrls()
    {
        return $this->reproUrls;
}

/**
* @param \App\JsonToClass\Generated\RootObject\ReproUrls|null $reproUrls
*/
public function setReproUrls($reproUrls)
{
$this->reproUrls = $reproUrls;
}

    /**
     * @return \mixed[]|null
     */
    public function getRejectedItineraries()
    {
        return $this->rejectedItineraries;
}

/**
* @param \mixed[]|null $rejectedItineraries
*/
public function setRejectedItineraries($rejectedItineraries)
{
$this->rejectedItineraries = $rejectedItineraries;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin[]|null
     */
    public function getPlugins()
    {
        return $this->plugins;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin[]|null $plugins
*/
public function setPlugins($plugins)
{
$this->plugins = $plugins;
}


}