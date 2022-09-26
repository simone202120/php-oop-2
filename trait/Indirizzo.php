<?php
trait Indirizzo {

    public $indirizzo;
    public $numeroCivico;
    public $comune;
    public $provincia;
    public $cap;
    public $nazione;

    public function getIndirizzoCompleto(){
        return $this->indirizzo . ' ' . $this->numeroCivico . ' ' . $this->cap . ' ' . $this->comune . '('. $this->provincia . ')' . '-' . $this->nazione;
    }
}