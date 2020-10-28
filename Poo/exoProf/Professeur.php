<?php 

Class Professeur extends Employe{

    private $specialite;


    public function __construct(string $newSpecialite, string $salaire, int $id, string $nom, string $prenom){
        $this->specialite = $newSpecialite;
        parent::__construct($salaire, $id, $nom, $prenom);
        }

        public function sePresenter(): string{
            return "le professeur est specialisé dans " . $this->specialite . " a un salaire de " .$this->salaire . " a pour id  " . $this->id . ", son nom est " 
            . $this->nom . " et son prenom est " . $this->prenom . " \n";
        }
    /**
     * Get the value of specialité
     */ 
    public function getSpecialité()
    {
        return $this->specialité;
    }

    /**
     * Set the value of specialité
     *
     * @return  self
     */ 
    public function setSpecialité($specialité)
    {
        $this->specialité = $specialité;

        return $this;
    }

    public function __toString() :string
        {
            return 
            "[specialialite] : " . $this->specialite . 
            "\n [salaire] : " . $this->salaire .
            "\n [Id] : "  . $this->id .
            "\n [nom] : " . $this->nom . 
            "\n [prenom] : " . $this->prenom .
            "\n "
            ;
        }
}