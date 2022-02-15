<?php


class Materiel
{
    private $Id_Materiel;
    private $Libelle_Materiel;
    private $Marque_Materiel;
    private $PrixMoyen_Materiel;
    private $Lien;
    private $chemin;


    private $Brins_Canne;
    private $Poids_Canne;
    private $Longueur_Canne;

    private $LongueurManche_Epuisette;
    private $Brins_Epuisette;
    private $Poids_Epuisette;
    private $Profondeur_Epuisette;
    private $Tete_Epuisette;

    private $Capacite_Moulinet;
    private $Ratio_Moulinet;
    private $Roulements_Moulinet;
    private $Poids_Moulinet;

    /**
     * Materiel constructor.
     * @param $Id_Materiel
     * @param $Libelle_Materiel
     * @param $Marque_Materiel
     * @param $PrixMoyen_Materiel
     * @param $Lien
     * @param $chemin
     * @param $Brins_Canne
     * @param $Poids_Canne
     * @param $Longueur_Canne
     * @param $LongueurManche_Epuisette
     * @param $Brins_Epuisette
     * @param $Poids_Epuisette
     * @param $Profondeur_Epuisette
     * @param $Tete_Epuisette
     * @param $Capacite_Moulinet
     * @param $Ratio_Moulinet
     * @param $Roulements_Moulinet
     * @param $Poids_Moulinet
     */
    public function __construct($Id_Materiel, $Libelle_Materiel, $Marque_Materiel, $PrixMoyen_Materiel, $Lien, $chemin, $Brins_Canne, $Poids_Canne, $Longueur_Canne, $LongueurManche_Epuisette, $Brins_Epuisette, $Poids_Epuisette, $Profondeur_Epuisette, $Tete_Epuisette, $Capacite_Moulinet, $Ratio_Moulinet, $Roulements_Moulinet, $Poids_Moulinet)
    {
        $this->Id_Materiel = $Id_Materiel;
        $this->Libelle_Materiel = $Libelle_Materiel;
        $this->Marque_Materiel = $Marque_Materiel;
        $this->PrixMoyen_Materiel = $PrixMoyen_Materiel;
        $this->Lien = $Lien;
        $this->chemin = $chemin;
        $this->Brins_Canne = $Brins_Canne;
        $this->Poids_Canne = $Poids_Canne;
        $this->Longueur_Canne = $Longueur_Canne;
        $this->LongueurManche_Epuisette = $LongueurManche_Epuisette;
        $this->Brins_Epuisette = $Brins_Epuisette;
        $this->Poids_Epuisette = $Poids_Epuisette;
        $this->Profondeur_Epuisette = $Profondeur_Epuisette;
        $this->Tete_Epuisette = $Tete_Epuisette;
        $this->Capacite_Moulinet = $Capacite_Moulinet;
        $this->Ratio_Moulinet = $Ratio_Moulinet;
        $this->Roulements_Moulinet = $Roulements_Moulinet;
        $this->Poids_Moulinet = $Poids_Moulinet;
    }

    #------------------------SETTERS------------------#

    /**
     * @return mixed
     */
    public function getIdMateriel()
    {
        return $this->Id_Materiel;
    }

    /**
     * @return mixed
     */
    public function getLibelleMateriel()
    {
        return $this->Libelle_Materiel;
    }

    /**
     * @return mixed
     */
    public function getMarqueMateriel()
    {
        return $this->Marque_Materiel;
    }

    /**
     * @return mixed
     */
    public function getPrixMoyenMateriel()
    {
        return $this->PrixMoyen_Materiel;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->Lien;
    }

    /**
     * @return mixed
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @return mixed
     */
    public function getBrinsCanne()
    {
        return $this->Brins_Canne;
    }

    /**
     * @return mixed
     */
    public function getPoidsCanne()
    {
        return $this->Poids_Canne;
    }

    /**
     * @return mixed
     */
    public function getLongueurCanne()
    {
        return $this->Longueur_Canne;
    }

    /**
     * @return mixed
     */
    public function getLongueurMancheEpuisette()
    {
        return $this->LongueurManche_Epuisette;
    }

    /**
     * @return mixed
     */
    public function getBrinsEpuisette()
    {
        return $this->Brins_Epuisette;
    }

    /**
     * @return mixed
     */
    public function getPoidsEpuisette()
    {
        return $this->Poids_Epuisette;
    }

    /**
     * @return mixed
     */
    public function getProfondeurEpuisette()
    {
        return $this->Profondeur_Epuisette;
    }

    /**
     * @return mixed
     */
    public function getTeteEpuisette()
    {
        return $this->Tete_Epuisette;
    }

    /**
     * @return mixed
     */
    public function getCapaciteMoulinet()
    {
        return $this->Capacite_Moulinet;
    }

    /**
     * @return mixed
     */
    public function getRatioMoulinet()
    {
        return $this->Ratio_Moulinet;
    }

    /**
     * @return mixed
     */
    public function getRoulementsMoulinet()
    {
        return $this->Roulements_Moulinet;
    }

    /**
     * @return mixed
     */
    public function getPoidsMoulinet()
    {
        return $this->Poids_Moulinet;
    }


    #------------------------GETTERS------------------#

    /**
     * @param mixed $Id_Materiel
     */
    public function setIdMateriel($Id_Materiel)
    {
        $this->Id_Materiel = $Id_Materiel;
    }

    /**
     * @param mixed $Libelle_Materiel
     */
    public function setLibelleMateriel($Libelle_Materiel)
    {
        $this->Libelle_Materiel = $Libelle_Materiel;
    }

    /**
     * @param mixed $Marque_Materiel
     */
    public function setMarqueMateriel($Marque_Materiel)
    {
        $this->Marque_Materiel = $Marque_Materiel;
    }

    /**
     * @param mixed $PrixMoyen_Materiel
     */
    public function setPrixMoyenMateriel($PrixMoyen_Materiel)
    {
        $this->PrixMoyen_Materiel = $PrixMoyen_Materiel;
    }

    /**
     * @param mixed $Lien
     */
    public function setLien($Lien)
    {
        $this->Lien = $Lien;
    }

    /**
     * @param mixed $chemin
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;
    }

    /**
     * @param mixed $Brins_Canne
     */
    public function setBrinsCanne($Brins_Canne)
    {
        $this->Brins_Canne = $Brins_Canne;
    }

    /**
     * @param mixed $Poids_Canne
     */
    public function setPoidsCanne($Poids_Canne)
    {
        $this->Poids_Canne = $Poids_Canne;
    }

    /**
     * @param mixed $Longueur_Canne
     */
    public function setLongueurCanne($Longueur_Canne)
    {
        $this->Longueur_Canne = $Longueur_Canne;
    }

    /**
     * @param mixed $LongueurManche_Epuisette
     */
    public function setLongueurMancheEpuisette($LongueurManche_Epuisette)
    {
        $this->LongueurManche_Epuisette = $LongueurManche_Epuisette;
    }

    /**
     * @param mixed $Brins_Epuisette
     */
    public function setBrinsEpuisette($Brins_Epuisette)
    {
        $this->Brins_Epuisette = $Brins_Epuisette;
    }

    /**
     * @param mixed $Poids_Epuisette
     */
    public function setPoidsEpuisette($Poids_Epuisette)
    {
        $this->Poids_Epuisette = $Poids_Epuisette;
    }

    /**
     * @param mixed $Profondeur_Epuisette
     */
    public function setProfondeurEpuisette($Profondeur_Epuisette)
    {
        $this->Profondeur_Epuisette = $Profondeur_Epuisette;
    }

    /**
     * @param mixed $Tete_Epuisette
     */
    public function setTeteEpuisette($Tete_Epuisette)
    {
        $this->Tete_Epuisette = $Tete_Epuisette;
    }

    /**
     * @param mixed $Capacite_Moulinet
     */
    public function setCapaciteMoulinet($Capacite_Moulinet)
    {
        $this->Capacite_Moulinet = $Capacite_Moulinet;
    }

    /**
     * @param mixed $Ratio_Moulinet
     */
    public function setRatioMoulinet($Ratio_Moulinet)
    {
        $this->Ratio_Moulinet = $Ratio_Moulinet;
    }

    /**
     * @param mixed $Roulements_Moulinet
     */
    public function setRoulementsMoulinet($Roulements_Moulinet)
    {
        $this->Roulements_Moulinet = $Roulements_Moulinet;
    }

    /**
     * @param mixed $Poids_Moulinet
     */
    public function setPoidsMoulinet($Poids_Moulinet)
    {
        $this->Poids_Moulinet = $Poids_Moulinet;
    }





}