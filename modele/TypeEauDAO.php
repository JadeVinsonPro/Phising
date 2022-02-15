<?php

include_once './modele/bc.inc.php';
include_once './modele/TypeEau.php';

class TypeEauDAO
{


    public static function getTypeEau() {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from type_eau");

            $req->execute();


            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new TypeEau ($ligne['Id_TypeEau'],$ligne['Libelle_TypeEau']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function ChargerTypeEau($Id_Type_Eau) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from type_eau where Id_Type_Eau = :Id_Type_Eau");
            $req->bindValue(':Id_Type_Eau', $Id_Type_Eau, PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            $resultat = new TypeEau ($ligne['Id_Type_Eau'],$ligne['Libelle_Type_Eau']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }



}