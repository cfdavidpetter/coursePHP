<?php
require_once 'AnimalTipo.php';

class Cachorro extends AnimalTipo
{
    public function comer()
    {
        return 'Ração';
    }

    public function fazerBarulho()
    {
        return 'Au au!';
    }

    public function andar()
    {
        return 'Cachorro Andando...';
    }
}