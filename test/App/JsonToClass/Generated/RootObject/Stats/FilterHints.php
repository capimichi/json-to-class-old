<?php

namespace App\JsonToClass\Generated\RootObject\Stats;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class FilterHints
 *
 * @Serializer\ExclusionPolicy("none")
 */
class FilterHints
{

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("enable_direct_filter")
     */
    protected $enableDirectFilter;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("enable_one_stop_filter")
     */
    protected $enableOneStopFilter;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("enable_two_plus_stops_filter")
     */
    protected $enableTwoPlusStopsFilter;

    /**
     * @return bool|null
     */
    public function getEnableDirectFilter()
    {
        return $this->enableDirectFilter;
}

/**
* @param bool|null $enableDirectFilter
*/
public function setEnableDirectFilter($enableDirectFilter)
{
$this->enableDirectFilter = $enableDirectFilter;
}

    /**
     * @return bool|null
     */
    public function getEnableOneStopFilter()
    {
        return $this->enableOneStopFilter;
}

/**
* @param bool|null $enableOneStopFilter
*/
public function setEnableOneStopFilter($enableOneStopFilter)
{
$this->enableOneStopFilter = $enableOneStopFilter;
}

    /**
     * @return bool|null
     */
    public function getEnableTwoPlusStopsFilter()
    {
        return $this->enableTwoPlusStopsFilter;
}

/**
* @param bool|null $enableTwoPlusStopsFilter
*/
public function setEnableTwoPlusStopsFilter($enableTwoPlusStopsFilter)
{
$this->enableTwoPlusStopsFilter = $enableTwoPlusStopsFilter;
}


}