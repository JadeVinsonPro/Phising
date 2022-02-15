<?php


class Poisson
{
    private $Id_Poisson;
    private $Nom_Poisson;
    private $NomScientifique_Poisson;
    private $Description_Poisson;
    private $Famille_Poisson;
    private $Taille_Poisson;
    private $Poids_Poisson;
    private $TypeEau_Poisson;
    private $IdLieuPeche_Poisson;
    private $chemin;


    public function __construct($Id_Poisson, $Nom_Poisson, $NomScientifique_Poisson, $Description_Poisson, $Famille_Poisson, $Taille_Poisson, $Poids_Poisson, $TypeEau_Poisson,$IdLieuPeche_Poisson, $chemin)
    {
        $this->Id_Poisson = $Id_Poisson;
        $this->Nom_Poisson = $Nom_Poisson;
        $this->NomScientifique_Poisson = $NomScientifique_Poisson;
        $this->Description_Poisson = $Description_Poisson;
        $this->Famille_Poisson = $Famille_Poisson;
        $this->Taille_Poisson = $Taille_Poisson;
        $this->Poids_Poisson = $Poids_Poisson;
        $this->TypeEau_Poisson = $TypeEau_Poisson;
        $this->IdLieuPeche_Poisson = $IdLieuPeche_Poisson;
        $this->chemin = $chemin;
    }

    #------------------------SETTERS------------------#


    /**
     * @return mixed
     */
    public function getIdPoisson()
    {
        return $this->Id_Poisson;
    }

    /**
     * @return mixed
     */
    public function getNomPoisson()
    {
        return $this->Nom_Poisson;
    }

    /**
     * @return mixed
     */
    public function getNomScientifiquePoisson()
    {
        return $this->NomScientifique_Poisson;
    }

    /**
     * @return mixed
     */
    public function getDescriptionPoisson()
    {
        return $this->Description_Poisson;
    }

    /**
     * @return mixed
     */
    public function getFamillePoisson()
    {
        return $this->Famille_Poisson;
    }

    /**
     * @return mixed
     */
    public function getTaillePoisson()
    {
        return $this->Taille_Poisson;
    }

    /**
     * @return mixed
     */
    public function getPoidsPoisson()
    {
        return $this->Poids_Poisson;
    }

    /**
     * @return mixed
     */
    public function getTypeEauPoisson()
    {
        return $this->TypeEau_Poisson;
    }

    /**
     * @return mixed
     */
    public function getIdLieuPechePoisson()
    {
        return $this->IdLieuPeche_Poisson;
    }


    /**
     * @return mixed
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @param mixed $Id_Poisson
     */
    public function setIdPoisson($Id_Poisson)
    {
        $this->Id_Poisson = $Id_Poisson;
    }

    /**
     * @param mixed $Nom_Poisson
     */
    public function setNomPoisson($Nom_Poisson)
    {
        $this->Nom_Poisson = $Nom_Poisson;
    }

    /**
     * @param mixed $NomScientifique_Poisson
     */
    public function setNomScientifiquePoisson($NomScientifique_Poisson)
    {
        $this->NomScientifique_Poisson = $NomScientifique_Poisson;
    }

    /**
     * @param mixed $Description_Poisson
     */
    public function setDescriptionPoisson($Description_Poisson)
    {
        $this->Description_Poisson = $Description_Poisson;
    }

    /**
     * @param mixed $Famille_Poisson
     */
    public function setFamillePoisson($Famille_Poisson)
    {
        $this->Famille_Poisson = $Famille_Poisson;
    }

    /**
     * @param mixed $Taille_Poisson
     */
    public function setTaillePoisson($Taille_Poisson)
    {
        $this->Taille_Poisson = $Taille_Poisson;
    }

    /**
     * @param mixed $Poids_Poisson
     */
    public function setPoidsPoisson($Poids_Poisson)
    {
        $this->Poids_Poisson = $Poids_Poisson;
    }

    /**
     * @param mixed $TypeEau_Poisson
     */
    public function setTypeEauPoisson($TypeEau_Poisson)
    {
        $this->TypeEau_Poisson = $TypeEau_Poisson;
    }

    /**
     * @param mixed $IdLieuPeche_Poisson
     */
    public function setIdLieuPechePoisson($IdLieuPeche_Poisson)
    {
        $this->IdLieuPeche_Poisson = $IdLieuPeche_Poisson;
    }

    /**
     * @param mixed $chemin
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }






}