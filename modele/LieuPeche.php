<?php


class LieuPeche
{
    private $Id_LieuPeche;
    private $Libelle_LieuPeche;

    /**
     * LieuPeche constructor.
     * @param $Id_LieuPeche
     * @param $Libelle_LieuPeche
     */
    public function __construct($Id_LieuPeche, $Libelle_LieuPeche)
    {
        $this->Id_LieuPeche = $Id_LieuPeche;
        $this->Libelle_LieuPeche = $Libelle_LieuPeche;
    }

    #------------------------SETTERS------------------#

    /**
     * @return mixed
     */
    public function getIdLieuPeche()
    {
        return $this->Id_LieuPeche;
    }

    /**
     * @return mixed
     */
    public function getLibelleLieuPeche()
    {
        return $this->Libelle_LieuPeche;
    }



}