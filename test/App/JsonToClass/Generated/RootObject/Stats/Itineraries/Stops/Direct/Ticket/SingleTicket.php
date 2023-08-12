<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SingleTicket
 *
 * @Serializer\ExclusionPolicy("none")
 */
class SingleTicket
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