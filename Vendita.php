<?php
    require_once __DIR__ . '/Immobile.php';

    class Vendita extends Immobile{

        public $prezzoDiVendita;
        
        public function __construct($nome, $prezzoDiVendita)
        {
            parent::__construct($nome);
            $this->prezzoDiVendita = $prezzoDiVendita;
        }
    }