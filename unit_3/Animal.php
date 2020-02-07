<?php

abstract class Animal
{
    public $nome;
    public $selvagem;
    static $qtd;

    public function __construct() {
        self::$qtd++;
        $qtd = self::$qtd;

        echo "{$qtd} Animal Iniciado... \n";
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

    public static function brigar()
    {
        $qtd = self::$qtd;
        return "Animal {$qtd} está brigando neste momento.";
    }
}

