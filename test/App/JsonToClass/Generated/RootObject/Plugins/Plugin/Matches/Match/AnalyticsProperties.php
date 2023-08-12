<?php

namespace App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AnalyticsProperties
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AnalyticsProperties
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id_campaign")
     */
    protected $idCampaign;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id_creative")
     */
    protected $idCreative;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id_placement")
     */
    protected $idPlacement;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("priority")
     */
    protected $priority;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("service")
     */
    protected $service;

    /**
     * @return string|null
     */
    public function getIdCampaign()
    {
        return $this->idCampaign;
}

/**
* @param string|null $idCampaign
*/
public function setIdCampaign($idCampaign)
{
$this->idCampaign = $idCampaign;
}

    /**
     * @return string|null
     */
    public function getIdCreative()
    {
        return $this->idCreative;
}

/**
* @param string|null $idCreative
*/
public function setIdCreative($idCreative)
{
$this->idCreative = $idCreative;
}

    /**
     * @return string|null
     */
    public function getIdPlacement()
    {
        return $this->idPlacement;
}

/**
* @param string|null $idPlacement
*/
public function setIdPlacement($idPlacement)
{
$this->idPlacement = $idPlacement;
}

    /**
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
}

/**
* @param string|null $priority
*/
public function setPriority($priority)
{
$this->priority = $priority;
}

    /**
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
}

/**
* @param string|null $service
*/
public function setService($service)
{
$this->service = $service;
}


}