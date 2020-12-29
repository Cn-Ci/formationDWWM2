<?php

abstract class Personne {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;


    public function __construct(string $newId, string $newNom, string $newPrenom, string $newMail, int $newTelephone, int $newSalaire){
        $this->id = $newId;
        $this->nom = $newNom;
        $this->prenom = $newPrenom;
        $this->mail = $newMail;
        $this->telephone = $newTelephone;
        $this->salaire = $newSalaire;
        }

    public function sePresenter(): string{
        return "la personne a pour id " . $this->id . " son nom est " .$this->nom . " , son prenom est  " . $this->prenom . ", son mail est " 
        . $this->mail . " son numero de telephone est " . $this->telephone . "et son salaire est " . $this->salaire . " \n";
    }


    abstract function calculerSalaire(): float ;
             

    function affiche() : void {
        echo $this;
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
    
    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
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
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

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

    public function __toString() :string
        {
            return 
            "[id] : " . $this->id . 
            "\n [nom] : " . $this->nom .
            "\n [prenom] : "  . $this->prenom .
            "\n [mail] : " . $this->mail . 
            "\n [telephone] : " . $this->telephone .
            "\n [salaire] : " . $this->salaire .
            "\n "
            ;
        }
}