<?php 

Class Personne {

    Protected $id;
    protected $nom;
    protected $prenom;

    public function __construct(int $newId, string $newNom, string $newPrenom){
        $this->id = $newId;
        $this->nom = $newNom;
        $this->prenom = $newPrenom;
        }

        public function sePresenter(): string{
            return "la personne a pour id  " . $this->id . " son nom est " 
            . $this->nom . " et son prenom est " . $this->prenom . " \n";
        }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function __toString() :string
        {
            return 
            "[Id] : "  . $this->id .
            "\n [nom] : " . $this->nom . 
            "\n [prenom] : " . $this->prenom .
            "\n "
            ;
        }
}