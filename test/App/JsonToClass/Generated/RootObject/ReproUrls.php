<?php

namespace App\JsonToClass\Generated\RootObject;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ReproUrls
 *
 * @Serializer\ExclusionPolicy("none")
 */
class ReproUrls
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ps_repro_url")
     */
    protected $psReproUrl;

    /**
     * @var \mixed[]|null
     * @Serializer\Type("array<\mixed>")
     * @Serializer\SerializedName("lus_repro_urls")
     */
    protected $lusReproUrls;

    /**
     * @return string|null
     */
    public function getPsReproUrl()
    {
        return $this->psReproUrl;
}

/**
* @param string|null $psReproUrl
*/
public function setPsReproUrl($psReproUrl)
{
$this->psReproUrl = $psReproUrl;
}

    /**
     * @return \mixed[]|null
     */
    public function getLusReproUrls()
    {
        return $this->lusReproUrls;
}

/**
* @param \mixed[]|null $lusReproUrls
*/
public function setLusReproUrls($lusReproUrls)
{
$this->lusReproUrls = $lusReproUrls;
}


}