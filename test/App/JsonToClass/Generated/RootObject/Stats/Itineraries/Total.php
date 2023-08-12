<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries;

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
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("min_price")
     */
    protected $minPrice;

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

    /**
     * @return \mixed|null
     */
    public function getMinPrice()
    {
        return $this->minPrice;
}

/**
* @param \mixed|null $minPrice
*/
public function setMinPrice($minPrice)
{
$this->minPrice = $minPrice;
}


}