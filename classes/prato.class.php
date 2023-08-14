<?php
class Prato{
    public $nome;
    public $ingredientes = array();

    public function addIngrediente($ingrediente)
    {
        $this -> ingredientes[] = $ingrediente;
    }

    public function clearPrato()
    {
        $this -> ingredientes = array();
    }

    public function calcCusto()
    {
        $total = 0;

        foreach($this -> ingredientes as $ingrediente){
            $total += $ingrediente -> valor;
        }
        return $total;
    }
}