<?php

namespace Michi\JsonToClass\Enum;

class PropertyTypeEnum
{
    const TYPE_STRING  = 'string';
    const TYPE_INTEGER = 'int';
    const TYPE_FLOAT   = 'float';
    const TYPE_BOOLEAN = 'bool';
    const TYPE_ARRAY   = 'array';
    const TYPE_OBJECT  = 'object';
    const TYPE_MIXED   = 'mixed';
    const TYPE_UNKNOWN = 'unknown';
    
    public static function getTypes()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_INTEGER,
            self::TYPE_FLOAT,
            self::TYPE_BOOLEAN,
            self::TYPE_ARRAY,
            self::TYPE_OBJECT,
        ];
    }
}