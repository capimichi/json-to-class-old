<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Ticket
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Ticket
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\SingleTicket|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\SingleTicket")
     * @Serializer\SerializedName("single_ticket")
     */
    protected $singleTicket;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNonNpt|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNonNpt")
     * @Serializer\SerializedName("multi_ticket_non_npt")
     */
    protected $multiTicketNonNpt;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNpt|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNpt")
     * @Serializer\SerializedName("multi_ticket_npt")
     */
    protected $multiTicketNpt;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\SingleTicket|null
     */
    public function getSingleTicket()
    {
        return $this->singleTicket;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\SingleTicket|null $singleTicket
*/
public function setSingleTicket($singleTicket)
{
$this->singleTicket = $singleTicket;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNonNpt|null
     */
    public function getMultiTicketNonNpt()
    {
        return $this->multiTicketNonNpt;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNonNpt|null $multiTicketNonNpt
*/
public function setMultiTicketNonNpt($multiTicketNonNpt)
{
$this->multiTicketNonNpt = $multiTicketNonNpt;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNpt|null
     */
    public function getMultiTicketNpt()
    {
        return $this->multiTicketNpt;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Stops\Direct\Ticket\MultiTicketNpt|null $multiTicketNpt
*/
public function setMultiTicketNpt($multiTicketNpt)
{
$this->multiTicketNpt = $multiTicketNpt;
}


}