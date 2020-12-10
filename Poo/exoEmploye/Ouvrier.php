<?php 


class Ouvrier extends Employe {
    private $entree;
    private $valeur = 2500 ;
    private $anc;
   
    public function calculAnnee() {
        $date = new DateTime();
        $dateJour = $date->format('Y');
        $dateEntree = $this->entree;

        $anneeEntree = new DateTime($dateEntree);
        $dateEntree = $anneeEntree->format('Y');
        $anc = $dateJour - $dateEntree;

        return $anc;
    } 


    public function getSal () {



        $date = new DateTime();
        $dateJour = $date->format('Y');
        $dateEntree = $this->entree;

        $anneeEntree = new DateTime($dateEntree);
        $dateEntree = $anneeEntree->format('Y');
        $ancc = $dateJour - $dateEntree;
        
         /* 
        $date = new DateTime();
        $diffObject = $this->entree->diff($date);
        $anc = $diffObject->y;
        
        */
    
        $salaire = $this->valeur + ( $ancc  * 100 );

        if ($this->valeur + $ancc * 100 <= 2 * $this->valeur){
            $salaire = $this->valeur + $ancc * 100;
        }else
            $salaire = $this->valeur * 2;

        return $salaire; 
    }

    public function __toString() : string
    {
        return 
        "\n [matricule]: " . parent::getMatricule().
        "\n [nom] : " . parent::getNom() .
        "\n [prenom] : " . parent::getPrenom() .
        "\n [date de naissance] : " . parent::getDate().
        "\n [date d'entrée] : " . $this->entree . 
        "\n [valeur] : " . $this->valeur  . 
        "\n [Anciennete] : ". self::calculAnnee();
        "\n";
    } 

    public function sePresenter()
                {
                    return "Le salaire " . self::getSal() . " de l'ouvrier " . parent::getNom()  . " " . parent::getPrenom()  . " il est née le " . parent::getDate()  . " et sa date d'entrée est le " . $this->entree  . " sa valeur est : " . $this->valeur . " son ancienneté est de " . self::calculAnnee(). " ans ";
                }


    /**
     * Get the value of entree
     */ 
    public function getEntree()
    {
        return $this->entree;
    }

    /**
     * Set the value of entree
     *
     * @return  self
     */ 
    public function setEntree($entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get the value of valeur
     */ 
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set the value of valeur
     *
     * @return  self
     */ 
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
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
     * Get the value of anc
     */ 
    public function getAnc()
    {
        return $this->anc;
    }

    /**
     * Set the value of anc
     *
     * @return  self
     */ 
    public function setAnc($anc)
    {
        $this->anc = $anc;

        return $this;
    }
}


