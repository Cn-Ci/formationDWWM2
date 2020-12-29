<?php 

class Patron extends Employe {
    private $ca; 
    private $cap;
    

    public function __toString() : string
    {
        return 
        "\n [matricule]: " . parent::getMatricule().
        "\n [nom] : " . parent::getNom() .
        "\n [prenom] : " . parent::getPrenom() .
        "\n [date de naissance] : " . parent::getDate().
        "\n [chiffre d'affaire] : " .$this->ca . 
        "\n [% chiffre d'affaire] : " . $this->cap . 
        "\n [salaire] : " . self::getSal() . 
        "\n";
    } 

   

    public function sePresenter() :string
            {
                return "Le salaire " . self::getSal()  . " du patron " . parent::getNom()  . " " . parent::getPrenom()  . " est née le " . parent::getDate()  . " son ca est de " . $this->ca . " , " . $this->cap . " %";
            }

            

    /**
     * Get the value of salaire
     */ 
    public function getSal()
    {
        return $salaire = self::getCa() * (self::getCap() / 100);
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of cap
     */ 
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set the value of cap
     *
     * @return  self
     */ 
    public function setCap($cap)
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get the value of ca
     */ 
    public function getCa()
    {
        return $this->ca;
    }

    /**
     * Set the value of ca
     *
     * @return  self
     */ 
    public function setCa($ca)
    {
        $this->ca = $ca;

        return $this;
    }
}