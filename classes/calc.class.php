<?php

namespace br\edu\ifnmg\web;

class Calc{
    public $num1;
    public $num2;

    public function soma()
    {
        return $this -> num1 + $this -> num2;
    }

    public function sub()
    {
        return $this -> num1 - $this -> num2;
    }

    public function mult()
    {
        return $this -> num1 * $this -> num2;
    }

    public function div()
    {
        return $this -> num1 / $this -> num2;
    }
}