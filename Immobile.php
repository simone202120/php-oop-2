<?php 

class Immobile{

    public $nome;
    public $descrizione;
    public $numeroStanze;
    public $mq;
    public $classeEnergetica;
    public $proprietario;

    public function __construct($nome, $proprietario){
        $this->nome =$nome;
        $this->$proprietario =$proprietario;
    }

    public function getImmobileInfo() {
        return $this->nome . '-' .$this->descrizione;
    }
}