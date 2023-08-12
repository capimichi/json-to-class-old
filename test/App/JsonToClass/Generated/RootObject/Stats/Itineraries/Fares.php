<?php

namespace App\JsonToClass\Generated\RootObject\Stats\Itineraries;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Fares
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Fares
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares\AdvanceSeatSelection|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares\AdvanceSeatSelection")
     * @Serializer\SerializedName("advance_seat_selection")
     */
    protected $advanceSeatSelection;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares\AdvanceSeatSelection|null
     */
    public function getAdvanceSeatSelection()
    {
        return $this->advanceSeatSelection;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Itineraries\Fares\AdvanceSeatSelection|null $advanceSeatSelection
*/
public function setAdvanceSeatSelection($advanceSeatSelection)
{
$this->advanceSeatSelection = $advanceSeatSelection;
}


}