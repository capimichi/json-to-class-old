<?php

namespace App\JsonToClass\Generated\RootObject;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Context
 *
 * @Serializer\ExclusionPolicy("none")
 */
class Context
{

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("request_id")
     */
    protected $requestId;

    /**
     * @var string|null
     * @Serializer\Type("string")
     * @Serializer\SerializedName("session_id")
     */
    protected $sessionId;

    /**
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
}

/**
* @param string|null $requestId
*/
public function setRequestId($requestId)
{
$this->requestId = $requestId;
}

    /**
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
}

/**
* @param string|null $sessionId
*/
public function setSessionId($sessionId)
{
$this->sessionId = $sessionId;
}


}