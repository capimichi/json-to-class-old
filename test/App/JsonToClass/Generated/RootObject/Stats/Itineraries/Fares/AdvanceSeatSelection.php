<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AdvanceSeatSelection
 *
 * @Serializer\ExclusionPolicy("none")
 */
class AdvanceSeatSelection
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
}

/**
* @param int|null $count
*/
public function setCount($count)
{
$this->count = $count;
}


}