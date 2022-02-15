<?php


class TypeEau
{
    private $Id_TypeEau;
    private $Libelle_TypeEau;

    /**
     * TypeEau constructor.
     * @param $Id_TypeEau
     * @param $Libelle_TypeEau
     */
    public function __construct($Id_TypeEau, $Libelle_TypeEau)
    {
        $this->Id_TypeEau = $Id_TypeEau;
        $this->Libelle_TypeEau = $Libelle_TypeEau;
    }


    #------------------------SETTERS------------------#

    /**
     * @return mixed
     */
    public function getIdTypeEau()
    {
        return $this->Id_TypeEau;
    }

    /**
     * @return mixed
     */
    public function getLibelleTypeEau()
    {
        return $this->Libelle_TypeEau;
    }




}