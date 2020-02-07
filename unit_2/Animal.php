<?php

class Animal 
{
    public $nome;
    public $selvagem;

    public function comer($comida)
    {
        return 'Comendo ' . $comida;
    }

    public function fazerBarulho($barulho)
    {
        return 'Fazendo barulho ' . $barulho;
    }
}

$vaca = new Animal();
$vaca->nome = 'Mimoza';
$vaca->selvagem = 1;

$cachorro = new Animal();
$cachorro->nome = 'Ralf';
$cachorro->selvagem = 0;

echo "
    Nome da Vaca: {$vaca->nome} \n
    É selvagem? {$vaca->selvagem} \n
    Som: {$vaca->fazerBarulho('Muuu!')} \n

    Nome da Cachorro: {$cachorro->nome} \n
    É selvagem? {$cachorro->selvagem} \n
    Som: {$cachorro->fazerBarulho('Au au!')} \n
";