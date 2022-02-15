<?php
include_once './modele/bc.inc.php';
include_once './modele/PoissonDAO.php';



// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage



if (isset($_POST['entre']) AND !empty($_POST['entre'])){
    $entre = $_POST['entre'];
   $ret = PoissonDAO::getPoissonByNom($entre);
   //$ret2 = MaterielDAO::getMaterielByIdNom($entre);
} else{
    print('echec');
}


//$ret = PoissonDAO::getPoisson($filtre);

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees

include './vue/entete.php';
include "./vue/vueResultatRecherche.php";
include "./vue/pied.php ";














/*
// creation du menu burger
$phishing = array();
$phishing[] = array("url" => "./?action=recherche&critere=nom", "label" => "Recherche par nom");

// critere de recherche par defaut
$critere = "nom";
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}

// recuperation des donnees GET, POST, et SESSION
if (isset($_GET["critere"])) {
    $critere = $_GET["critere"];
}
$nomR = "";
if (isset($_POST["nomR"])) {
    $nomR = $_POST["nomR"];
}
$voieAdrR = "";
if (isset($_POST["voieAdrR"])) {
    $voieAdrR = $_POST["voieAdrR"];
}
$cpR = "";
if (isset($_POST["cpR"])) {
    $cpR = $_POST["cpR"];
}
$villeR = "";
if (isset($_POST["villeR"])) {
    $villeR = $_POST["villeR"];
}
$tabIdTC = array();
if (isset($_POST["tabIdTC"])) {
    $tabIdTC = $_POST["tabIdTC"];
}


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage


switch ($critere) {
    case 'nom':
        // recherche par nom
        $listeRestos = getRestosByNomR($nomR);
        break;
    case 'adresse':
        // recherche par adresse
        $listeRestos = getRestosByAdresse($voieAdrR, $cpR, $villeR);
        break;

}// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Recherche d'un restaurant";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueRechercheResto.php";
if (!empty($_POST)) {
    // affichage des resultats de la recherche
    include "$racine/vue/vueResultRecherche.php";
}


*/



