<?php

include_once './modele/BoutiqueDAO.php';


// recuperation des donnees GET, POST, et SESSION


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage

$ret = BoutiqueDAO::getBoutique();


include './vue/entete.php';
include "./vue/vueListeBoutique.php";
include "./vue/pied.php";