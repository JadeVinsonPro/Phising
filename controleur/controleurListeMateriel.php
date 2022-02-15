<?php

include_once './modele/Materiel.php';
include_once './modele/MaterielDAO.php';// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
if (!isset($_GET['filtre'])){
    $filtre = 'default';
} else  {
    $filtre = $_GET['filtre'];
}

$ret = MaterielDAO::getMateriel($filtre);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees

include './vue/entete.php';
include "./vue/vueListeMateriel.php";
include "./vue/pied.php";