<?php

namespace br\edu\ifnmg\web\util;

class Calc{
    public static function Soma($x, $y)
    {
        return $x + $y;
    }

    public static function Sub($x, $y)
    {
        return $x - $y;
    }

    public static function Mult($x, $y)
    {
        return $x * $y;
    }

    public static function Div($x, $y)
    {
        return $x / $y;
    }
}