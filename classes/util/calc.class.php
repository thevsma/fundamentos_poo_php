<?php

namespace br\edu\ifnmg\web\util;

class Calc{
    public static function Soma($x, $y)
    {
        return $x + $y;
    }

    public function Sub($x, $y)
    {
        return $x - $y;
    }

    public function Mult($x, $y)
    {
        return $x * $y;
    }

    public function Div($x, $y)
    {
        return $x / $y;
    }
}