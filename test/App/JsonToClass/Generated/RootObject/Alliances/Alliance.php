<?php

namespace App\JsonToClass\Generated\RootObject\Alliances;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Alliance
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Alliance
{

    /**
     * @var int|null
     * @Serializer\Type("int")
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
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
}

/**
* @param int|null $id
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


}