<?php


class Voiture
{
private $modele;
    private $marque;

    /**
     * Voiture constructor.
     * @param $modele
     * @param $marque
     */
    public function __construct($modele, $marque)
    {
        $this->modele = $modele;
        $this->marque = $marque;
    }

    public function __toString()
    {
       return $this->modele;
    }


}