<?php

abstract class AnimalTipo
{
    public $nome;
    public $selvagem;

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

