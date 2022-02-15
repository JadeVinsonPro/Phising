<?php

include_once './modele/PoissonDAO.php';

if (!isset($_GET['Id_Poisson'])){
    header("Location: ?action=listePoisson");
} else  {
    $Id_Poisson = $_GET['Id_Poisson'];
}
// Obtenir l'Id du poisson
$poisson = PoissonDAO::getPoissonByIdPoisson($Id_Poisson);
/*
 *
public function enregistrer()
{
    // Setting object properties

    $this->poisson->setNomPoisson($_POST["inputNomPoisson"]);
    $this->poisson->setNomScientifique($_POST["inputNomScientifique"]);
    $this->poisson->setDescriptionPoisson($_POST["inputDescriptionPoisson"]);
    $this->poisson->setFamillePoisson($_POST["inputFamillePoisson"]);
    $this->poisson->setTaillePoisson($_POST["inputTaillePoisson"]);
    $this->poisson->setPoidsPoisson($_POST["inputPoidsPoisson"]);
    $this->poisson->setChemin($_POST["inputChemin"]);

    $this->poisson->set(TypeEauDAO::getTypeEau($_POST["inputTypeEau"]));


    // Saving change in the database
    PoissonDAO::modifierPoisson($poisson);

    // Reloading details page
    header("Location: ?action=detailPoisson&Id_Poisson=" . $this->poisson->getIdPoisson());
}*/


include './vue/entete.php';
include "./vue/vueDetailPoisson.php";
include "./vue/pied.php";


