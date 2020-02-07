<?php
require_once 'Animal.php';

final class Cachorro extends Animal
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