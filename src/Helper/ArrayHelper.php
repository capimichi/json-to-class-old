<?php


namespace Michi\JsonToClass\Helper;


class ArrayHelper
{
    public static function mergeArrays($array1, $array2)
    {
        if (!is_array($array1)) {
            $array1 = [];
        }
        
        if (!is_array($array2)) {
            $array2 = [];
        }
        
        foreach ($array2 as $k => $v) {
            if (is_array($v)) {
                $array1[$k] = self::mergeArrays($array1[$k] ?? [], $v);
            } else {
                if (empty($array1[$k])) {
                    $array1[$k] = $v;
                }
            }
        }
        
        return $array1;
    }
}