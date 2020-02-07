<?php
require_once 'Animal.php';

final class Vaca extends Animal
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