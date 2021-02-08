<?php

require "Models/Database.php";
require "Models/Clients.php";
require "Models/Showtypes.php";

$Clients = new Clients();
$Showtypes = new showtypes();

// PARTIE 1 EXO 1:
$resultCLients = ($Clients->searchClients());

// PARTIE 1 EXO 2:
$resultShowTypes = ($Showtypes->showtypesType());

// PARTIE 1 EXO 3:
$resultFirstClients = ($Clients->firstClients());

// PARTIE 1 EXO 4:
$resultClientsFidelity = ($Clients->cardFidelityClients());

// PARTIE 1 EXO 5:
$resultClientsM = ($Clients->nameClientsM());
