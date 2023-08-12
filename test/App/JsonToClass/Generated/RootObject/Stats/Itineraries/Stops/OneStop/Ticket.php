<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Ticket
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Ticket
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\SingleTicket|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\SingleTicket")
     * @Serializer\SerializedName("single_ticket")
     */
    protected $singleTicket;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNonNpt|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNonNpt")
     * @Serializer\SerializedName("multi_ticket_non_npt")
     */
    protected $multiTicketNonNpt;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNpt|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNpt")
     * @Serializer\SerializedName("multi_ticket_npt")
     */
    protected $multiTicketNpt;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\SingleTicket|null
     */
    public function getSingleTicket()
    {
        return $this->singleTicket;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\SingleTicket|null $singleTicket
*/
public function setSingleTicket($singleTicket)
{
$this->singleTicket = $singleTicket;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNonNpt|null
     */
    public function getMultiTicketNonNpt()
    {
        return $this->multiTicketNonNpt;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNonNpt|null $multiTicketNonNpt
*/
public function setMultiTicketNonNpt($multiTicketNonNpt)
{
$this->multiTicketNonNpt = $multiTicketNonNpt;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNpt|null
     */
    public function getMultiTicketNpt()
    {
        return $this->multiTicketNpt;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\OneStop\Ticket\MultiTicketNpt|null $multiTicketNpt
*/
public function setMultiTicketNpt($multiTicketNpt)
{
$this->multiTicketNpt = $multiTicketNpt;
}


}