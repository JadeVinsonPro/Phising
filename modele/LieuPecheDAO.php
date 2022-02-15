<?php

include_once './modele/LieuPeche.php';
class LieuPecheDAO
{
    public static function getLieuPeche() {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from lieu_peche");

            $req->execute();


            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new LieuPeche ($ligne['Id_LieuPeche'],$ligne['Libelle_LieuPeche']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function ChargerLieuPeche($Id_LieuPeche) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from lieu_peche where Id_LieuPeche = :Id_LieuPeche");
            $req->bindValue(':Id_LieuPeche', $Id_LieuPeche, PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            $resultat = new LieuPeche ($ligne['Id_LieuPeche'],$ligne['Libelle_LieuPeche']);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }




}