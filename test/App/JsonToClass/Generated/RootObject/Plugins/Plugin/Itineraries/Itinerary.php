<?php

namespace App\JsonToClass\Generated\RootObject\Plugins\Plugin\Itineraries;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Itinerary
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Itinerary
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_eco_contender")
     */
    protected $isEcoContender;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("eco_contender_delta")
     */
    protected $ecoContenderDelta;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("emissions_in_kg")
     */
    protected $emissionsInKg;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("typical_emissions_in_kg")
     */
    protected $typicalEmissionsInKg;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("emissions_delta_in_kg")
     */
    protected $emissionsDeltaInKg;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("emissions_delta_percentage")
     */
    protected $emissionsDeltaPercentage;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("emissions_level")
     */
    protected $emissionsLevel;

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
     * @return bool|null
     */
    public function getIsEcoContender()
    {
        return $this->isEcoContender;
}

/**
* @param bool|null $isEcoContender
*/
public function setIsEcoContender($isEcoContender)
{
$this->isEcoContender = $isEcoContender;
}

    /**
     * @return \mixed|null
     */
    public function getEcoContenderDelta()
    {
        return $this->ecoContenderDelta;
}

/**
* @param \mixed|null $ecoContenderDelta
*/
public function setEcoContenderDelta($ecoContenderDelta)
{
$this->ecoContenderDelta = $ecoContenderDelta;
}

    /**
     * @return \mixed|null
     */
    public function getEmissionsInKg()
    {
        return $this->emissionsInKg;
}

/**
* @param \mixed|null $emissionsInKg
*/
public function setEmissionsInKg($emissionsInKg)
{
$this->emissionsInKg = $emissionsInKg;
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

    /**
     * @return \mixed|null
     */
    public function getEmissionsDeltaInKg()
    {
        return $this->emissionsDeltaInKg;
}

/**
* @param \mixed|null $emissionsDeltaInKg
*/
public function setEmissionsDeltaInKg($emissionsDeltaInKg)
{
$this->emissionsDeltaInKg = $emissionsDeltaInKg;
}

    /**
     * @return \mixed|null
     */
    public function getEmissionsDeltaPercentage()
    {
        return $this->emissionsDeltaPercentage;
}

/**
* @param \mixed|null $emissionsDeltaPercentage
*/
public function setEmissionsDeltaPercentage($emissionsDeltaPercentage)
{
$this->emissionsDeltaPercentage = $emissionsDeltaPercentage;
}

    /**
     * @return string|null
     */
    public function getEmissionsLevel()
    {
        return $this->emissionsLevel;
}

/**
* @param string|null $emissionsLevel
*/
public function setEmissionsLevel($emissionsLevel)
{
$this->emissionsLevel = $emissionsLevel;
}


}