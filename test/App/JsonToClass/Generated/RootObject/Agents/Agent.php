<?php

namespace App\JsonToClass\Generated\RootObject\Agents;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Agent
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Agent
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    protected $id;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    protected $name;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("is_carrier")
     */
    protected $isCarrier;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("update_status")
     */
    protected $updateStatus;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("optimised_for_mobile")
     */
    protected $optimisedForMobile;

    /**
     * @var bool|null
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("live_update_allowed")
     */
    protected $liveUpdateAllowed;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("rating_status")
     */
    protected $ratingStatus;

    /**
     * @var \mixed|null
     * @Serializer\Type("\mixed")
     * @Serializer\SerializedName("rating")
     */
    protected $rating;

    /**
     * @var int|null
     * @Serializer\Type("int")
     * @Serializer\SerializedName("feedback_count")
     */
    protected $feedbackCount;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Agents\Agent\RatingBreakdown|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Agents\Agent\RatingBreakdown")
     * @Serializer\SerializedName("rating_breakdown")
     */
    protected $ratingBreakdown;

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
}

/**
* @param string|null $id
*/
public function setId($id)
{
$this->id = $id;
}

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
}

/**
* @param string|null $name
*/
public function setName($name)
{
$this->name = $name;
}

    /**
     * @return bool|null
     */
    public function getIsCarrier()
    {
        return $this->isCarrier;
}

/**
* @param bool|null $isCarrier
*/
public function setIsCarrier($isCarrier)
{
$this->isCarrier = $isCarrier;
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
     * @return bool|null
     */
    public function getOptimisedForMobile()
    {
        return $this->optimisedForMobile;
}

/**
* @param bool|null $optimisedForMobile
*/
public function setOptimisedForMobile($optimisedForMobile)
{
$this->optimisedForMobile = $optimisedForMobile;
}

    /**
     * @return bool|null
     */
    public function getLiveUpdateAllowed()
    {
        return $this->liveUpdateAllowed;
}

/**
* @param bool|null $liveUpdateAllowed
*/
public function setLiveUpdateAllowed($liveUpdateAllowed)
{
$this->liveUpdateAllowed = $liveUpdateAllowed;
}

    /**
     * @return string|null
     */
    public function getRatingStatus()
    {
        return $this->ratingStatus;
}

/**
* @param string|null $ratingStatus
*/
public function setRatingStatus($ratingStatus)
{
$this->ratingStatus = $ratingStatus;
}

    /**
     * @return \mixed|null
     */
    public function getRating()
    {
        return $this->rating;
}

/**
* @param \mixed|null $rating
*/
public function setRating($rating)
{
$this->rating = $rating;
}

    /**
     * @return int|null
     */
    public function getFeedbackCount()
    {
        return $this->feedbackCount;
}

/**
* @param int|null $feedbackCount
*/
public function setFeedbackCount($feedbackCount)
{
$this->feedbackCount = $feedbackCount;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Agents\Agent\RatingBreakdown|null
     */
    public function getRatingBreakdown()
    {
        return $this->ratingBreakdown;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Agents\Agent\RatingBreakdown|null $ratingBreakdown
*/
public function setRatingBreakdown($ratingBreakdown)
{
$this->ratingBreakdown = $ratingBreakdown;
}


}