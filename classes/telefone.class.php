<?php
    class Telefone
    {
        public $ddd;
        public $num;

        public function __toString()
        {
            return "Telefone: ({$this -> ddd}) {$this -> num}";
        }
    }
    