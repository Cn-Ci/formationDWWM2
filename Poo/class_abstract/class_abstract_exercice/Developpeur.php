<?php

Class Developpeur extends Personne{

    public $specialite;
 

    public function __construct(int $id, string $nom, string $prenom, string $mail, int $telephone, int $salaire, string $specialite){
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
        }



    public function sePresenter(): string{
        return "l'id du developpeur est " . $this->id . " son nom est " .$this->nom . ", son prenom est  " . $this->prenom . ", son mail est " 
        . $this->mail . " son numero de telephone est " . $this->telephone . " et son salaire est " . $this->salaire . ", \n il a est le  " . self::$counter . 
        " ieme et sa specialité est : " . $this->specialite . "\n";
    }

    function calculerSalaire(): float {
         return $this->salaire *1.20;
    }
            

    function affiche() : void {
        echo $this;
    }


    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function __toString() :string
        {
            return 
            "[id] : " . $this->id . 
            "\n [nom] : " . $this->nom .
            "\n [prenom] : "  . $this->prenom .
            "\n [mail] : " . $this->mail . 
            "\n [telephone] : " . $this->telephone .
            "\n [salaire] : " . $this->salaire .
            "\n [counter] : " . self::$counter .
            "\n [specialite] : " . $this->specialite . 
            "\n "
            ;
        }
}