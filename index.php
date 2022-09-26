<?php

require_once __DIR__ . '/Agente.php';
require_once __DIR__ . '/Cliente.php';
require_once __DIR__ . '/Vendita.php';
require_once __DIR__ . '/Affitto.php';

$myAgente = new Agente ("Michele", "Azzato", "MicheleAzzato@gmail.com", "password");
$myCliente = new Cliente ("Giuseppe", "Perez", "Giuseppe@Perez.com", "password", "bravo Ragazzo");

$immobileInAffitto = new Immobile("LOFT", $myCliente, 800);

$myCliente->indirizzo = 'Via Garibaldi';
$myCliente->numeroCivico = '21';
$myCliente->comune = 'Foggia';
$myCliente->provincia = 'FOGGIA';
$myCliente->cap = '80096';
$myCliente->nazione = 'ITALIA';