<?php

namespace Classes\Person;

class Person
{
    public $nome;
    public $idade;

    function __construct($nome, $idade) 
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getPerson() 
    {
        return "
            Seu nome é $this->nome e você tem $this->idade!
        ";
    }
}