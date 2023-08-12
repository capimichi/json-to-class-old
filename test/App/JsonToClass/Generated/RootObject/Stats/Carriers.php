<?php

namespace App\JsonToClass\Generated\RootObject\Stats;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Carriers
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Carriers
{

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Carriers\SingleCarriers|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Carriers\SingleCarriers")
     * @Serializer\SerializedName("single_carriers")
     */
    protected $singleCarriers;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Stats\Carriers\MultipleCarriers|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Stats\Carriers\MultipleCarriers")
     * @Serializer\SerializedName("multiple_carriers")
     */
    protected $multipleCarriers;

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Carriers\SingleCarriers|null
     */
    public function getSingleCarriers()
    {
        return $this->singleCarriers;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Carriers\SingleCarriers|null $singleCarriers
*/
public function setSingleCarriers($singleCarriers)
{
$this->singleCarriers = $singleCarriers;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Stats\Carriers\MultipleCarriers|null
     */
    public function getMultipleCarriers()
    {
        return $this->multipleCarriers;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Stats\Carriers\MultipleCarriers|null $multipleCarriers
*/
public function setMultipleCarriers($multipleCarriers)
{
$this->multipleCarriers = $multipleCarriers;
}


}