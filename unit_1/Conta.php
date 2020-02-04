<?php

class Conta 
{
    public $saldo = 0;

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return $this->saldo;
    }
}


$conta1 = new Conta();
echo "Saldo: " . $conta1->sacar(100) . "\n";
echo "Saldo: " . $conta1->depositar(100) . "\n";