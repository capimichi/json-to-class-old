<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TwoPlusStops
 *
 * @Serializer\ExclusionPolicy("none")
 */
class TwoPlusStops
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Total|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Total")
     * @Serializer\SerializedName("total")
     */
    protected $total;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Ticket|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Ticket")
     * @Serializer\SerializedName("ticket")
     */
    protected $ticket;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Total|null
     */
    public function getTotal()
    {
        return $this->total;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Total|null $total
*/
public function setTotal($total)
{
$this->total = $total;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Ticket|null
     */
    public function getTicket()
    {
        return $this->ticket;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\TwoPlusStops\Ticket|null $ticket
*/
public function setTicket($ticket)
{
$this->ticket = $ticket;
}


}