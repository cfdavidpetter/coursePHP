<?php
require_once 'AnimalTipo.php';

class Vaca extends AnimalTipo
{
    public function comer()
    {
        return 'Capim';
    }

    public function fazerBarulho()
    {
        return 'Muu muu!';
    }

    public function andar()
    {
        return 'Vaca Andando...';
    }
}