<?php
    require_once __DIR__ . '/trait/indirizzo.php';
class User {

    use Indirizzo;

    public $telefono;
    public $email;
    public $password;
    public $name;
    public $cognome;

    public function __construct($nome, $cognome, $email, $password){
        $this->nome =$nome;
        $this->cognome =$cognome;
        $this->email =$email;
        $this->password =$password;

    }
    public function getUserInfo(){
        return $this->nome . ' ' . $this->cognnome . ' . Telefono: ' . $this->telefono . '-Email: ' . $this->email;
    }


}