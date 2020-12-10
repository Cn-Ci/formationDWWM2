<?php 

abstract class Employe {
    private $matricule;
    private $nom;
    private $prenom;
    private $date;
    public $salaire;

    public function __construct() {
        $this->salaire;
    }

    public function __toString() : string
    {
        return 
        "\n [matricule]: " . $this->matricule .
        "\n [nom] : " . $this->nom .
        "\n [prenom] : " . $this->prenom .
        "\n [date] : " . $this->date .
        "\n [salaire] : " . self::$salaire .
        "\n ";
        } 

    abstract function getSal ();
    

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

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

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}