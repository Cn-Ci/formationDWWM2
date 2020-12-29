<?php

include_once 'Employe.php';

class Patron extends Employe
{
    private static $chiffreAffaire = 100000;
    private $pourcentage;

    // constrcuteur

    public function getSalaire(): ?float
    {
        return self::$chiffreAffaire * $this->pourcentage / 100;
    }
    
    // __toString

    /**
     * Get the value of pourcentage
     */ 
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set the value of pourcentage
     *
     * @return  self
     */ 
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
}