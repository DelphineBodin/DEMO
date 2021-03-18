<?php


class VilleQ01
{
    private $nom;
    private $departement;

    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return "La ville $this->nom est dans le département $this->departement";
        return "La ville $this->nom est dans le département $this->departement";

    }
}