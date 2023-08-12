<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OneStop
 *
 * @Serializer\ExclusionPolicy("none")
 */
class OneStop
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Total|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Total")
     * @Serializer\SerializedName("total")
     */
    protected $total;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket")
     * @Serializer\SerializedName("ticket")
     */
    protected $ticket;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Total|null
     */
    public function getTotal()
    {
        return $this->total;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Total|null $total
*/
public function setTotal($total)
{
$this->total = $total;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket|null
     */
    public function getTicket()
    {
        return $this->ticket;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket|null $ticket
*/
public function setTicket($ticket)
{
$this->ticket = $ticket;
}


}