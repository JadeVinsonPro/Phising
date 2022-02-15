<?php


include "./controleur/controleurPrincipal.php";
include_once "./modele/bc.inc.php";
#include_once "./vue/vueResultatRecherche.php";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
else {
    $action = "defaut";
}/*
if(isset($_GET["filtre"])){

    $filtre = $_GET["filtre"];

}

else{
    $filtre = "defaut";
}

*/
$fichier = controleurPrincipal($action);
include "./controleur/$fichier";

?>
