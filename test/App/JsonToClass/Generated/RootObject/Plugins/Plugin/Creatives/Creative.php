<?php

namespace App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Creative
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Creative
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id_format")
     */
    protected $idFormat;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Fields|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Fields")
     * @Serializer\SerializedName("fields")
     */
    protected $fields;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\AnalyticsProperties|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\AnalyticsProperties")
     * @Serializer\SerializedName("analytics_properties")
     */
    protected $analyticsProperties;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Pixels|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Pixels")
     * @Serializer\SerializedName("pixels")
     */
    protected $pixels;

    /**
     * @return string|null
     */
    public function getIdFormat()
    {
        return $this->idFormat;
}

/**
* @param string|null $idFormat
*/
public function setIdFormat($idFormat)
{
$this->idFormat = $idFormat;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Fields|null
     */
    public function getFields()
    {
        return $this->fields;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Fields|null $fields
*/
public function setFields($fields)
{
$this->fields = $fields;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\AnalyticsProperties|null
     */
    public function getAnalyticsProperties()
    {
        return $this->analyticsProperties;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\AnalyticsProperties|null $analyticsProperties
*/
public function setAnalyticsProperties($analyticsProperties)
{
$this->analyticsProperties = $analyticsProperties;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Pixels|null
     */
    public function getPixels()
    {
        return $this->pixels;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Creatives\Creative\Pixels|null $pixels
*/
public function setPixels($pixels)
{
$this->pixels = $pixels;
}


}