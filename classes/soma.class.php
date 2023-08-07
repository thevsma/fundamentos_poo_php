<?php
class Soma{
    public $num1;
    public $num2;

    public function soma()
    {
        return $this -> num1 + $this -> num2;
    }

    public function __toString()
    {
        return "{$this -> num1} + {$this -> num2} = {$this -> soma()}";
    }
}