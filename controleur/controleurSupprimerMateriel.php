<?php

include_once './modele/MaterielDAO.php';

if (!isset($_GET['Id_Materiel'])){
    header("Location: ?action=listeMateriel");
} else  {
    $Id_Materiel = $_GET['Id_Materiel'];
}

$materiel = MaterielDAO::getMaterielByIdMateriel($Id_Materiel);
MaterielDAO::supprimerMateriel($materiel);

header("Location: ?action=listeMateriel");