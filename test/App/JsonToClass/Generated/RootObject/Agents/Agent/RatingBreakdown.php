<?php

namespace App\JsonToClass\Generated\RootObject\Agents\Agent;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class RatingBreakdown
 *
 * @Serializer\ExclusionPolicy("none")
 */
class RatingBreakdown
{

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("reliable_prices")
     */
    protected $reliablePrices;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("clear_extra_fees")
     */
    protected $clearExtraFees;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("customer_service")
     */
    protected $customerService;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("ease_of_booking")
     */
    protected $easeOfBooking;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("other")
     */
    protected $other;

    /**
     * @return \mixed|null
     */
    public function getReliablePrices()
    {
        return $this->reliablePrices;
}

/**
* @param \mixed|null $reliablePrices
*/
public function setReliablePrices($reliablePrices)
{
$this->reliablePrices = $reliablePrices;
}

    /**
     * @return \mixed|null
     */
    public function getClearExtraFees()
    {
        return $this->clearExtraFees;
}

/**
* @param \mixed|null $clearExtraFees
*/
public function setClearExtraFees($clearExtraFees)
{
$this->clearExtraFees = $clearExtraFees;
}

    /**
     * @return \mixed|null
     */
    public function getCustomerService()
    {
        return $this->customerService;
}

/**
* @param \mixed|null $customerService
*/
public function setCustomerService($customerService)
{
$this->customerService = $customerService;
}

    /**
     * @return \mixed|null
     */
    public function getEaseOfBooking()
    {
        return $this->easeOfBooking;
}

/**
* @param \mixed|null $easeOfBooking
*/
public function setEaseOfBooking($easeOfBooking)
{
$this->easeOfBooking = $easeOfBooking;
}

    /**
     * @return \mixed|null
     */
    public function getOther()
    {
        return $this->other;
}

/**
* @param \mixed|null $other
*/
public function setOther($other)
{
$this->other = $other;
}


}