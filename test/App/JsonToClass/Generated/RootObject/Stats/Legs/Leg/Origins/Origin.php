<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Legs\Leg\Origins;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Origin
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Origin
{

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     */
    protected $count;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
}

/**
* @param int|null $id
*/
public function setId($id)
{
$this->id = $id;
}

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