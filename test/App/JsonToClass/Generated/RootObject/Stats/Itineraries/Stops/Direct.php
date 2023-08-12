<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Direct
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Direct
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Total|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Total")
     * @Serializer\SerializedName("total")
     */
    protected $total;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket")
     * @Serializer\SerializedName("ticket")
     */
    protected $ticket;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Total|null
     */
    public function getTotal()
    {
        return $this->total;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Total|null $total
*/
public function setTotal($total)
{
$this->total = $total;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket|null
     */
    public function getTicket()
    {
        return $this->ticket;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket|null $ticket
*/
public function setTicket($ticket)
{
$this->ticket = $ticket;
}


}