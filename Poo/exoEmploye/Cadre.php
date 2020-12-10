<?php 

class Cadre extends Employe {
    private $indice;

    public function __toString() : string
    {
        return 
        "\n [matricule]: " . parent::getMatricule().
        "\n [nom] : " . parent::getNom() .
        "\n [prenom] : " . parent::getPrenom() .
        "\n [date de naissance] : " . parent::getDate().
        "\n [indice] : " . $this->indice . 
        "\n [salaire] : " . $salaire . 
        "\n";
    } 

   

    public function sePresenter() :string
            {
                return "Le salaire " . self::getSal() . " du cadre " . parent::getNom()  . " " . parent::getPrenom()  . " est née le " . parent::getDate()  . " son indice est " . $this->indice ;
            }


    public function getSal()
    {
        if ($this->indice  == 1) {
            return $salaire = 13000 ;
        }elseif ($this->indice == 2) {
            return $salaire = 15000 ;
        }elseif ($this->indice == 3) {
            return $salaire = 17000 ;
        }elseif ($this->indice == 4) {
            return $salaire = 20000 ;
        }
    }


    /**
     * Get the value of indice
     */ 
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set the value of indice
     *
     * @return  self
     */ 
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }
}

