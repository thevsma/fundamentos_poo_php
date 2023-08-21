<?php
class Calc{
    public $x;
    public $y;

    public function Soma()
    {
        return $this -> x + $this -> y;
    }

    public function Sub()
    {
        return $this -> x - $this -> y;
    }

    public function Mult()
    {
        return $this -> x * $this -> y;
    }

    public function Div()
    {
        return $this -> x / $this -> y;
    }
}