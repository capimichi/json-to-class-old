<?php

namespace App\JsonToClass\Generated\RootObject\Itineraries\Itinerary\PricingOptions\PricingOption;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Price
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Price
{

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("amount")
     */
    protected $amount;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("update_status")
     */
    protected $updateStatus;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("last_updated")
     */
    protected $lastUpdated;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("quote_age")
     */
    protected $quoteAge;

    /**
     * @return \mixed|null
     */
    public function getAmount()
    {
        return $this->amount;
}

/**
* @param \mixed|null $amount
*/
public function setAmount($amount)
{
$this->amount = $amount;
}

    /**
     * @return string|null
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
}

/**
* @param string|null $updateStatus
*/
public function setUpdateStatus($updateStatus)
{
$this->updateStatus = $updateStatus;
}

    /**
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
}

/**
* @param string|null $lastUpdated
*/
public function setLastUpdated($lastUpdated)
{
$this->lastUpdated = $lastUpdated;
}

    /**
     * @return \mixed|null
     */
    public function getQuoteAge()
    {
        return $this->quoteAge;
}

/**
* @param \mixed|null $quoteAge
*/
public function setQuoteAge($quoteAge)
{
$this->quoteAge = $quoteAge;
}


}