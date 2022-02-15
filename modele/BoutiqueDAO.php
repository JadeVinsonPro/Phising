<?php
include_once './modele/Boutique.php';
include_once './modele/bc.inc.php';
class BoutiqueDAO
{
    public static function getBoutique()
    {
        $resultat = array();


        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from boutique");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Boutique ($ligne['Id_Boutique'], $ligne['Nom_Boutique'], $ligne['Adresse_Boutique'], $ligne['CP_Boutique'], $ligne['Ville_Boutique'], $ligne['NumTel_Boutique'], $ligne['chemin']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }




}