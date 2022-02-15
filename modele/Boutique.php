<?php


class Boutique
{

    private $Id_Boutique;
    private $Nom_Boutique;
    private $Adresse_Boutique;
    private $CP_Boutique;
    private $Ville_Boutique;
    private $NumTel_Boutique;

    private $chemin;


    public function __construct($Id_Boutique,$Nom_Boutique,$Adresse_Boutique,$CP_Boutique,$Ville_Boutique,$NumTel_Boutique,$chemin)
    {
        $this->Id_Boutique = $Id_Boutique;
        $this->Nom_Boutique = $Nom_Boutique;
        $this->Adresse_Boutique = $Adresse_Boutique;
        $this->CP_Boutique = $CP_Boutique;
        $this->Ville_Boutique = $Ville_Boutique;
        $this->NumTel_Boutique = $NumTel_Boutique;


        $this->chemin = $chemin;

    }



    /**
     * @return mixed
     */
    public function getNomBoutique()
    {
        return $this->Nom_Boutique;
    }

    /**
     * @return mixed
     */
    public function getAdresseBoutique()
    {
        return $this->Adresse_Boutique;
    }

    /**
     * @return mixed
     */
    public function getCPBoutique()
    {
        return $this->CP_Boutique;
    }

    /**
     * @return mixed
     */
    public function getVilleBoutique()
    {
        return $this->Ville_Boutique;
    }

    /**
     * @return mixed
     */
    public function getNumTelBoutique()
    {
        return $this->NumTel_Boutique;
    }

    public function getChemin()
    {
        return $this->chemin;
    }






}