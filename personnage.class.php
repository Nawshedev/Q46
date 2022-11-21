<?php

class Personnage {

    private $nom;
    private $vie;
    private $force_Attaque;
    private $point_Attaque;

    public function __construct($nom, $vie, $force_Attaque, $point_Attaque)
    {

        $this->nom = $nom;
        $this->vie = 100;
        $this->force_Attaque = $force_Attaque;
        $this->point_Attaque = $point_Attaque;

    }

    function attaque($valeurjetdeDe) {

        return $valeurjetdeDe * $this->force_Attaque;
    }





}