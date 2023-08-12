<?php

namespace App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Pixels
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Pixels
{

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("impression")
     */
    protected $impression;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("click")
     */
    protected $click;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("view")
     */
    protected $view;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\Price|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\Price")
     * @Serializer\SerializedName("price")
     */
    protected $price;

    /**
     * @var \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\RefreshUpdate|null
     * @Serializer\Type("\App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\RefreshUpdate")
     * @Serializer\SerializedName("refresh_update")
     */
    protected $refreshUpdate;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("engage")
     */
    protected $engage;

    /**
     * @var string[]|null
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("click_details")
     */
    protected $clickDetails;

    /**
     * @return string[]|null
     */
    public function getImpression()
    {
        return $this->impression;
}

/**
* @param string[]|null $impression
*/
public function setImpression($impression)
{
$this->impression = $impression;
}

    /**
     * @return string[]|null
     */
    public function getClick()
    {
        return $this->click;
}

/**
* @param string[]|null $click
*/
public function setClick($click)
{
$this->click = $click;
}

    /**
     * @return string[]|null
     */
    public function getView()
    {
        return $this->view;
}

/**
* @param string[]|null $view
*/
public function setView($view)
{
$this->view = $view;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\Price|null
     */
    public function getPrice()
    {
        return $this->price;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\Price|null $price
*/
public function setPrice($price)
{
$this->price = $price;
}

    /**
     * @return \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\RefreshUpdate|null
     */
    public function getRefreshUpdate()
    {
        return $this->refreshUpdate;
}

/**
* @param \App\JsonToClass\Generated\RootObject\Plugins\Plugin\Matches\Match\Pixels\RefreshUpdate|null $refreshUpdate
*/
public function setRefreshUpdate($refreshUpdate)
{
$this->refreshUpdate = $refreshUpdate;
}

    /**
     * @return string[]|null
     */
    public function getEngage()
    {
        return $this->engage;
}

/**
* @param string[]|null $engage
*/
public function setEngage($engage)
{
$this->engage = $engage;
}

    /**
     * @return string[]|null
     */
    public function getClickDetails()
    {
        return $this->clickDetails;
}

/**
* @param string[]|null $clickDetails
*/
public function setClickDetails($clickDetails)
{
$this->clickDetails = $clickDetails;
}


}