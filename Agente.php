<?php
require_once __DIR__ .'/User.php';

class Agente extends User {

    public $provvigione =3;

    public function __construct($nome, $cognome, $email, $password, $provvigione=3){
        parent:: __construct($nome, $cognome, $email, $password);
        $this->provvigione = $provvigione;
    }
}