<?php

class Personne {
    protected $id;
    protected $prenom;
    protected $nom;
    protected $mail;
    protected $telephone;
    protected $salaire;

    public function __construct(int $id, string $prenom, string $nom, string $mail, 
                                string $telephone, float $salaire){
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;

    }

    public function calculerSalaire() :float { 
        return $this->salaire;
    }

    public function affiche() : void {
        echo $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom() :string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom) : self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom) :self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail() : string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail(string $mail) : self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone(string $telephone) : self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire() : float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire(float $salaire) : self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
}