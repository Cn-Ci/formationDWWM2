<?php 

Class Etudiant extends Personne{

    private $cne;

    public function __construct(string $newCne, int $id, string $nom, string $prenom){
        $this->cne = $newCne;
        parent::__construct($id, $nom, $prenom);
        }

        public function sePresenter(): string{
            return "l'étudiant a pour Cne " .$this->cne . " et a pour id " . $this->id . " son nom est " 
            . $this->nom . " et son prenom est " . $this->prenom . " \n";
        }

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
    return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
    $this->cne = $cne;

    return $this;
    }

    public function __toString() :string
        {
            return 
            "[Cne] : " . $this->cne . 
            "\n [Id] : "  . $this->id .
            "\n [nom] : " . $this->nom . 
            "\n [prenom] : " . $this->prenom .
            "\n "
            ;
        }

}