<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["defaut"] = "../controleur/controleurAccueil.php"; // page accueil
    $lesActions["recherche"] = "../controleur/controleurRecherche.php";

    $lesActions["listeBoutique"] = "../controleur/controleurListeBoutique.php";
    $lesActions["listeMateriel"] = "../controleur/controleurListeMateriel.php";
    $lesActions["supprimerMateriel"] = "../controleur/controleurSupprimerMateriel.php";

    $lesActions["listePoisson"] = "../controleur/controleurListePoisson.php";
    $lesActions["detailPoisson"] = "../controleur/controleurDetailPoisson.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }

}

