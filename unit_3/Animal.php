<?php

abstract class Animal
{
    public $nome;
    public $selvagem;

    public function __construct() {
        echo "Animal Iniciado... \n";
    }

    public function comer()
    {
        return 'Comendo';
    }

    public function fazerBarulho()
    {
        return 'Fazendo barulho';
    }

    abstract function andar();
}

