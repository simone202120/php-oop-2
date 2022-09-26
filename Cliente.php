<?php

require_once __DIR__ .'/User.php';

class Cliente extends User {

    public $note = null;

    public function __construct($nome, $cognome, $email, $password, $note){
        parent::__construct($nome, $cognome, $email, $password);
        $this->note = $note;
    }
}