<?php

namespace App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Fields
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Fields
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("callToActionText")
     */
    protected $callToActionText;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("excludedLocations")
     */
    protected $excludedLocations;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("experiments")
     */
    protected $experiments;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("headline")
     */
    protected $headline;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("hideSponsoredLabel")
     */
    protected $hideSponsoredLabel;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("image")
     */
    protected $image;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("layoutType")
     */
    protected $layoutType;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     */
    protected $message;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("partnerLogo")
     */
    protected $partnerLogo;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("redirectUrl")
     */
    protected $redirectUrl;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("search")
     */
    protected $search;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sponsoredText")
     */
    protected $sponsoredText;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("strevdaId")
     */
    protected $strevdaId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("third_party_tracking_dimensions")
     */
    protected $thirdPartyTrackingDimensions;

    /**
     * @return string|null
     */
    public function getCallToActionText()
    {
        return $this->callToActionText;
}

/**
* @param string|null $callToActionText
*/
public function setCallToActionText($callToActionText)
{
$this->callToActionText = $callToActionText;
}

    /**
     * @return string|null
     */
    public function getExcludedLocations()
    {
        return $this->excludedLocations;
}

/**
* @param string|null $excludedLocations
*/
public function setExcludedLocations($excludedLocations)
{
$this->excludedLocations = $excludedLocations;
}

    /**
     * @return string|null
     */
    public function getExperiments()
    {
        return $this->experiments;
}

/**
* @param string|null $experiments
*/
public function setExperiments($experiments)
{
$this->experiments = $experiments;
}

    /**
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->headline;
}

/**
* @param string|null $headline
*/
public function setHeadline($headline)
{
$this->headline = $headline;
}

    /**
     * @return string|null
     */
    public function getHideSponsoredLabel()
    {
        return $this->hideSponsoredLabel;
}

/**
* @param string|null $hideSponsoredLabel
*/
public function setHideSponsoredLabel($hideSponsoredLabel)
{
$this->hideSponsoredLabel = $hideSponsoredLabel;
}

    /**
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
}

/**
* @param string|null $image
*/
public function setImage($image)
{
$this->image = $image;
}

    /**
     * @return string|null
     */
    public function getLayoutType()
    {
        return $this->layoutType;
}

/**
* @param string|null $layoutType
*/
public function setLayoutType($layoutType)
{
$this->layoutType = $layoutType;
}

    /**
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
}

/**
* @param string|null $message
*/
public function setMessage($message)
{
$this->message = $message;
}

    /**
     * @return string|null
     */
    public function getPartnerLogo()
    {
        return $this->partnerLogo;
}

/**
* @param string|null $partnerLogo
*/
public function setPartnerLogo($partnerLogo)
{
$this->partnerLogo = $partnerLogo;
}

    /**
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
}

/**
* @param string|null $redirectUrl
*/
public function setRedirectUrl($redirectUrl)
{
$this->redirectUrl = $redirectUrl;
}

    /**
     * @return string|null
     */
    public function getSearch()
    {
        return $this->search;
}

/**
* @param string|null $search
*/
public function setSearch($search)
{
$this->search = $search;
}

    /**
     * @return string|null
     */
    public function getSponsoredText()
    {
        return $this->sponsoredText;
}

/**
* @param string|null $sponsoredText
*/
public function setSponsoredText($sponsoredText)
{
$this->sponsoredText = $sponsoredText;
}

    /**
     * @return string|null
     */
    public function getStrevdaId()
    {
        return $this->strevdaId;
}

/**
* @param string|null $strevdaId
*/
public function setStrevdaId($strevdaId)
{
$this->strevdaId = $strevdaId;
}

    /**
     * @return string|null
     */
    public function getThirdPartyTrackingDimensions()
    {
        return $this->thirdPartyTrackingDimensions;
}

/**
* @param string|null $thirdPartyTrackingDimensions
*/
public function setThirdPartyTrackingDimensions($thirdPartyTrackingDimensions)
{
$this->thirdPartyTrackingDimensions = $thirdPartyTrackingDimensions;
}


}