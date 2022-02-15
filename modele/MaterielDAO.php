<?php

include_once './modele/Materiel.php';
include_once './modele/bc.inc.php';

class MaterielDAO
{


    public static function getMateriel($filtre) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            switch ($filtre){
                case('prixASC'):
                    $req = $cnx->prepare("select * from materiel order by PrixMoyen_Materiel");
                    break;

                case('prixDESC'):
                    $req = $cnx->prepare("select * from materiel order by PrixMoyen_Materiel DESC");
                    break;

                case('canne'):
                    $req = $cnx->prepare("select * from materiel where chemin like 'Canne%'");
                    break;

                case('epuisette'):
                    $req = $cnx->prepare("select * from materiel where chemin like 'Epuisette%'");
                    break;

                case('moulinet'):
                    $req = $cnx->prepare("select * from materiel where chemin like 'Moulinet%'");
                    break;

                case('garbolino'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Garbolino'");
                    break;

                case('sensas'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Sensas'");
                    break;

                case('xsert'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Xsert'");
                    break;

                case('DAM'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'DAM'");
                    break;

                case('autain'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'autain'");
                    break;

                case('pafex'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Pafex'");
                    break;

                case('mitchell'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Mitchell'");
                    break;

                case('abegarcia'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Abe Garcia'");
                    break;

                case('daiwa'):
                    $req = $cnx->prepare("select * from materiel where Marque_Materiel like 'Daiwa'");
                    break;


                default:
                    $req = $cnx->prepare("select * from materiel");
                    break;
            }
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = new Materiel ($ligne['Id_Materiel'],$ligne['Libelle_Materiel'],$ligne['Marque_Materiel'],$ligne['PrixMoyen_Materiel'],$ligne['Lien'],$ligne['chemin'],
                    $ligne['Brins_Canne'],$ligne['Poids_Canne'],$ligne['Longueur_Canne'],
                    $ligne['LongueurManche_Epuisette'],$ligne['Brins_Epuisette'],$ligne['Poids_Epuisette'],$ligne['Profondeur_Epuisette'],$ligne['Tete_Epuisette'],
                    $ligne['Capacite_Moulinet'],$ligne['Ratio_Moulinet'],$ligne['Roulements_Moulinet'],$ligne['Poids_Moulinet']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getMaterielByIdMateriel($Id_Materiel) {
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from materiel where Id_Materiel=:Id_Materiel");
            $req->bindValue(':Id_Materiel', $Id_Materiel, PDO::PARAM_INT);

            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);

            $resultat = new Materiel ($ligne['Id_Materiel'],$ligne['Libelle_Materiel'],$ligne['Marque_Materiel'],$ligne['PrixMoyen_Materiel'],$ligne['Lien'],$ligne['chemin'],
                $ligne['Brins_Canne'],$ligne['Poids_Canne'],$ligne['Longueur_Canne'],
                $ligne['LongueurManche_Epuisette'],$ligne['Brins_Epuisette'],$ligne['Poids_Epuisette'],$ligne['Profondeur_Epuisette'],$ligne['Tete_Epuisette'],
                $ligne['Capacite_Moulinet'],$ligne['Ratio_Moulinet'],$ligne['Roulements_Moulinet'],$ligne['Poids_Moulinet']);

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }


    public static function supprimerMateriel($materiel)
    {
        $attributsMateriel = array(':Id_Materiel' => $materiel->getIdMateriel());

        $cnx = connexionPDO();
        $req = $cnx->prepare("Delete from materiel where Id_Materiel = :Id_Materiel");
        $req->execute($attributsMateriel);
    }



}