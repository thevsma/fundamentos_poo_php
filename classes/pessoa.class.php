<?php
    class Pessoa
    {
        public $cpf;
        public $name;
        public $tel;

        public function __toString()
        {
            return "Nome: {$this -> name}<br>CPF: {$this -> cpf}<br>";
        }
    }
    