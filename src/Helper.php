<?php

namespace Ninh\Test;

class Helper
{
    public static function str_replace(string $search = null, string $replace = null, string $string = null)
    {
        $str_replace = str_replace($search, $replace, $string);
        return $str_replace;
    }
}
