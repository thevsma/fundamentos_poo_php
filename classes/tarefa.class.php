<?php
class Tarefa{
    public $desc;
    public $conc;
    public $dateTime;

    public function __construct()
    {
        $this -> desc = "Nenhuma descrição fornecida";
    }

    public function __toString()
    {
        return "Descrição: {$this -> desc}<br>" .
        "Concluída: {$this -> conc}<br>" .
        "Data e hora: {$this -> dateTime}";
    }
}