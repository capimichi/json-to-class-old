<?php

namespace App\JsonToClass\Generated\RootObject\Query;

class ChildAges implements \JsonSerializable
{


public static function fromJson($data)
{
$object = new self();
if(!is_array($data)){
    return $object;
}
return $object;
}

public function jsonSerialize(): array
{
$data = [];
return $data;
}
}