<?php

abstract class Personne {

    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;
    public static $counter = 0;


    public function __construct(string $id, string $nom, string $prenom, string $mail, int $telephone, int $salaire){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
        self::$counter++;
        }


    public function sePresenter(): string{
        return "la personne a pour id " . $this->id . " son nom est " .$this->nom . " , son prenom est  " . $this->prenom . ", son mail est " 
        . $this->mail . " son numero de telephone est " . $this->telephone . "et son salaire est " . $this->salaire . "et il est le " . self::$counter . " ieme \n";
    }


    abstract function calculerSalaire(): float ;
             


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

    /**
     * Get the value of counter
     */ 
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * Set the value of counter
     *
     * @return  self
     */ 
    public function setCounter($counter)
    {
        $this->counter = $counter;

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
            "\n "
            ;
        }

    
}