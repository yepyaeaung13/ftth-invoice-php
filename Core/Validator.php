<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $trimValue = trim($value);
        return strlen($trimValue) >= $min && strlen($trimValue) <= $max;
    }
    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
