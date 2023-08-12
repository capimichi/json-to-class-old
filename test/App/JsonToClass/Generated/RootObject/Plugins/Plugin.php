<?php

namespace App\JsonToClass\Generated\RootObject\Plugins;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Plugin
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Plugin
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("@type")
     */
    protected $type;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative>")
     * @Serializer\SerializedName("creatives")
     */
    protected $creatives;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    protected $status;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match>")
     * @Serializer\SerializedName("matches")
     */
    protected $matches;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\PositionToImpressionId|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\PositionToImpressionId")
     * @Serializer\SerializedName("position_to_impression_id")
     */
    protected $positionToImpressionId;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("creative_position_to_impression_id")
     */
    protected $creativePositionToImpressionId;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Itineraries\Itinerary[]|null
     * @Serializer\Type("array<\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Itineraries\Itinerary>")
     * @Serializer\SerializedName("itineraries")
     */
    protected $itineraries;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("typical_emissions_in_kg")
     */
    protected $typicalEmissionsInKg;

    /**
     * @return string|null
     */
    public function gettype()
    {
        return $this->type;
}

/**
* @param string|null $type
*/
public function settype($type)
{
$this->type = $type;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative[]|null
     */
    public function getCreatives()
    {
        return $this->creatives;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative[]|null $creatives
*/
public function setCreatives($creatives)
{
$this->creatives = $creatives;
}

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
}

/**
* @param string|null $status
*/
public function setStatus($status)
{
$this->status = $status;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match[]|null
     */
    public function getMatches()
    {
        return $this->matches;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match[]|null $matches
*/
public function setMatches($matches)
{
$this->matches = $matches;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\PositionToImpressionId|null
     */
    public function getPositionToImpressionId()
    {
        return $this->positionToImpressionId;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\PositionToImpressionId|null $positionToImpressionId
*/
public function setPositionToImpressionId($positionToImpressionId)
{
$this->positionToImpressionId = $positionToImpressionId;
}

    /**
     * @return string[]|null
     */
    public function getCreativePositionToImpressionId()
    {
        return $this->creativePositionToImpressionId;
}

/**
* @param string[]|null $creativePositionToImpressionId
*/
public function setCreativePositionToImpressionId($creativePositionToImpressionId)
{
$this->creativePositionToImpressionId = $creativePositionToImpressionId;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Itineraries\Itinerary[]|null
     */
    public function getItineraries()
    {
        return $this->itineraries;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Itineraries\Itinerary[]|null $itineraries
*/
public function setItineraries($itineraries)
{
$this->itineraries = $itineraries;
}

    /**
     * @return \mixed|null
     */
    public function getTypicalEmissionsInKg()
    {
        return $this->typicalEmissionsInKg;
}

/**
* @param \mixed|null $typicalEmissionsInKg
*/
public function setTypicalEmissionsInKg($typicalEmissionsInKg)
{
$this->typicalEmissionsInKg = $typicalEmissionsInKg;
}


}