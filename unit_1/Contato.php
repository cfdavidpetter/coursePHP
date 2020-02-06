<?php

class Contato {
    public $nome;
    private $email;
    public $fonefoneProf;
    private $fonePessoal;

    public function setFonePessoal(Int $fone)
    {
        $this->fonePessoal = $fone;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    protected function getFonePessoal()
    {
        return $this->fonePessoal;
    }

    protected function getEmail()
    {
        return $this->email;
    }
}

class ContatoEletrtonico extends Contato { 

    public function setEmail(String $email)
    {
        $email = parent::setEmail($email);
        return $email . ' <- OK';
    }

}

$contato = new ContatoEletrtonico();
$contato->nome = 'David Petter Alves';
$contato->setFonePessoal(47996787222);
$contato->setEmail('cfdavidpetter@gmail.com');

var_dump($contato);