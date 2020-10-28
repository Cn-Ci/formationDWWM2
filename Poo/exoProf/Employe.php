<?php 

class Employe extends Personne{

    protected $salaire;

    public function __construct(string $newSalaire, int $id, string $nom, string $prenom){
        $this->salaire = $newSalaire;
        parent::__construct($id, $nom, $prenom);
        }
    

        public function sePresenter(): string{
            return "l'employe a un salaire de " .$this->salaire . " a pour id  " . $this->id . ", son nom est " 
            . $this->nom . " et son prenom est " . $this->prenom . " \n";
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

    public function __toString() :string
        {
            return  
            "[salaire] : " . $this->salaire .
            "\n [Id] : "  . $this->id .
            "\n [nom] : " . $this->nom . 
            "\n [prenom] : " . $this->prenom .
            "\n "
            ;
        }
}