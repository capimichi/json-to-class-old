<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Total
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Total
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