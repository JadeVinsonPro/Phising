<?php
include_once './modele/Poisson.php';
include_once './modele/TypeEauDAO.php';
include_once './modele/LieuPecheDAO.php';
include_once './modele/bc.inc.php';

class PoissonDAO
{

      public static function getPoissonByIdPoisson($Id_Poisson) {
            try {
                $cnx = connexionPDO();
                $req = $cnx->prepare("select * from poisson where Id_Poisson=:Id_Poisson");
                $req->bindValue(':Id_Poisson', $Id_Poisson, PDO::PARAM_INT);

                $req->execute();

                $ligne = $req->fetch(PDO::FETCH_ASSOC);

                $resultat = new Poisson ($ligne['Id_Poisson'],$ligne['Nom_Poisson'],$ligne['NomScientifique_Poisson'],$ligne['Description_Poisson'],$ligne['Famille_Poisson'],$ligne['Taille_Poisson'],$ligne['Poids_Poisson'], TypeEauDAO::ChargerTypeEau($ligne['IdTypeEau_Poisson']), LieuPecheDAO::ChargerLieuPeche($ligne['IdLieuPeche_Poisson']),$ligne['chemin']);

            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage();
                die();
          }
            return $resultat;
        }


    public static function getPoisson($filtre)
    {
      $resultat = array();

      try {
          $cnx = connexionPDO();

          switch ($filtre){
              case('alpha'):
                  $req = $cnx->prepare("select * from poisson order by Nom_Poisson");
                  break;

              case('alphaDESC'):
                  $req = $cnx->prepare("select * from poisson order by Nom_Poisson DESC");
                  break;

              case('eaudouce'):
                  $req = $cnx->prepare("select * from poisson where  	IdTypeEau_Poisson = 1");
                  break;

              case('eausalee'):
                  $req = $cnx->prepare("select * from poisson where  	IdTypeEau_Poisson = 2");
                  break;

              case('famEsocidae'):
                  $req = $cnx->prepare("select * from poisson where  	Famille_Poisson like 'Esocidae'");
                  break;

              case('famCyprinidae'):
                  $req = $cnx->prepare("select * from poisson where  	Famille_Poisson like 'Cyprinidae'");
                  break;

              case('famPercidae'):
                  $req = $cnx->prepare("select * from poisson where  	Famille_Poisson like 'Percidae'");
                  break;

              case('famSalmonidae'):
                  $req = $cnx->prepare("select * from poisson where  	Famille_Poisson like 'Salmonidae'");
                  break;


              default:
                  $req = $cnx->prepare("select * from poisson");
                  break;
          }
          $req->execute();


          $ligne = $req->fetch(PDO::FETCH_ASSOC);
          while ($ligne) {
              if ($ligne['Id_Poisson'] != NULL){
                  $resultat[] = new Poisson ($ligne['Id_Poisson'],$ligne['Nom_Poisson'],$ligne['NomScientifique_Poisson'],$ligne['Description_Poisson'],$ligne['Famille_Poisson'],$ligne['Taille_Poisson'],$ligne['Poids_Poisson'],TypeEauDAO::ChargerTypeEau($ligne['IdTypeEau_Poisson']),0,$ligne['chemin']);
                  $ligne = $req->fetch(PDO::FETCH_ASSOC);

              }
              else{
                  $ligne = $req->fetch(PDO::FETCH_ASSOC);
              }
          }
      } catch (PDOException $e) {
          print "Erreur !: " . $e->getMessage();
          die();
      }
      return $resultat;
    }

    public static function modifierPoisson($poisson)
    {
        $attributsPoisson = array(':Id_Poisson' => $poisson->getIdPoisson(),
            ':Nom_Poisson' => $poisson->getNomPoisson(),
            ':NomScientifique_Poisson' => $poisson->getNomScientifiquePoisson(),
            ':Description_Poisson' => $poisson->getDescriptionPoisson(),
            ':Famille_Poisson' => $poisson->getFamillePoisson(),
            ':Taille_Poisson' => $poisson->getTaillePoisson(),
            ':Poids_Poisson' => $poisson->getPoidsPoisson(),
            ':chemin' => $poisson->getChemin(),
            ':IdTypeEau_Poisson' => $poisson->getTypeEauPoisson()->getIdTypeEau(),
            ':IdLieuPeche_Poisson' =>1);


        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE poisson set Nom_Poisson = :Nom_Poisson, 
                   NomScientifique_Poisson = :NomScientifique_Poisson, 
                   Description_Poisson = :Description_Poisson,
                   Famille_Poisson = :Famille_Poisson,
                   Taille_Poisson = :Taille_Poisson,
                   Poids_Poisson = :Poids_Poisson,
                   chemin = :chemin,
                   IdTypeEau_Poisson = :IdTypeEau_Poisson,
                   IdLieuPeche_Poisson = :IdLieuPeche_Poisson
                   where Id_Poisson = :Id_Poisson");
        $req->execute($attributsPoisson);


    }

    public static function supprimerPoisson($poisson)
    {
        $attributsPoisson = array(':Id_Poisson' => $poisson->getIdPoisson());

        $cnx = connexionPDO();
        $req = $cnx->prepare("Delete from Poisson where Id_Poisson = :Id_Poisson");
        $req->execute($attributsPoisson);
    }


    public static function creerPoisson($Id_Poisson, $Nom_Poisson, $NomScientifique_Poisson, $Description_Poisson, $Famille_Poisson, $Taille_Poisson, $Poids_Poisson, $TypeEau_Poisson,$IdLieuPeche_Poisson,$chemin){
        //$resultat=false;
        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("insert into poisson (Id_Poisson, Nom_Poisson, NomScientifique_Poisson, Description_Poisson, Famille_Poisson, Taille_Poisson, Poids_Poisson, TypeEau_Poisson,IdLieuPeche_Poisson, chemin) values (:Id_Poisson, :Nom_Poisson,:NomScientifique_Poisson,:Description_Poisson, :Famille_Poisson, :Taille_Poisson, :Poids_Poisson, :TypeEau_Poisson,:IdLieuPeche_Poisson, :chemin)");
            $req->bindValue(':Id_Poisson', $Id_Poisson, PDO::PARAM_STR);
            $req->bindValue(':Nom_Poisson', $Nom_Poisson, PDO::PARAM_STR);
            $req->bindValue(':NomScientifique_Poisson', $NomScientifique_Poisson, PDO::PARAM_STR);
            $req->bindValue(':Description_Poisson', $Description_Poisson, PDO::PARAM_STR);
            $req->bindValue(':Famille_Poisson', $Famille_Poisson, PDO::PARAM_STR);
            $req->bindValue(':Taille_Poisson', $Taille_Poisson, PDO::PARAM_STR);
            $req->bindValue(':Poids_Poisson', $Poids_Poisson , PDO::PARAM_STR);
            $req->bindValue(':TypeEau_Poisson', $TypeEau_Poisson, PDO::PARAM_STR);
            $req->bindValue(':IdLieuPeche_Poisson', $IdLieuPeche_Poisson, PDO::PARAM_STR);
            $req->execute();

            $resultat=true;
        }

        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            $resultat=false;
            //die();
        }
        return $resultat;
    }

/*
    public static function DeletePoisson($Id_Poisson){
        $resultat = -1;

        try {
            $cnx = connexionpdo::connexionPDO();
            $req = $cnx->prepare("delete from poisson where Id_Poisson=:Id_Poisson");
            $req->bindValue(':Id_Poisson' , $Id_Poisson, PDO::PARAM_STR);
            $req->execute();

        }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    */

    public static function getPoissonByNom($Nom_Poisson) {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from poisson where Nom_Poisson like :Nom_Poisson");
            $req->bindValue(':Nom_Poisson', "%".$Nom_Poisson."%", PDO::PARAM_STR);
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while($ligne)
            {
                $resultat[] = new Poisson ($ligne['Id_Poisson'],$ligne['Nom_Poisson'],$ligne['NomScientifique_Poisson'],$ligne['Description_Poisson'],$ligne['Famille_Poisson'],$ligne['Taille_Poisson'],$ligne['Poids_Poisson'], TypeEauDAO::ChargerTypeEau($ligne['IdTypeEau_Poisson']), LieuPecheDAO::ChargerLieuPeche($ligne['IdLieuPeche_Poisson']),$ligne['chemin']);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);

            }


        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }


}