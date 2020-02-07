<?php

require_once 'Vaca.php';
require_once 'Cachorro.php';

$vaca = new Vaca();
$vaca->nome = 'Mimoza';
$vaca->selvagem = 1;

$cachorro = new Cachorro();
$cachorro->nome = 'Ralf';
$cachorro->selvagem = 0;

echo "
    Nome da Vaca: {$vaca->nome} \n
    É selvagem? {$vaca->selvagem} \n
    Som: {$vaca->fazerBarulho()} \n
    {$vaca->andar()} \n

    Nome do Cachorro: {$cachorro->nome} \n
    É selvagem? {$cachorro->selvagem} \n
    Som: {$cachorro->fazerBarulho()} \n
    {$cachorro->andar()} \n
";