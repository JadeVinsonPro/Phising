<?php

include_once './modele/bc.inc.php';
include_once './modele/PoissonDAO.php';

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage

// $ret = PoissonDAO::getPoisson();
if (!isset($_GET['filtre'])){
    $filtre = 'default';
} else  {
    $filtre = $_GET['filtre'];
}
$ret = PoissonDAO::getPoisson($filtre);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees

include './vue/entete.php';
include "./vue/vueListePoisson.php";
include "./vue/pied.php";