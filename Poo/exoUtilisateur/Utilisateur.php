<?php 

Class Utilisateur extends Personne {

    private $login;
    private $password ;
    private $service;
    private $profil;
    

    public function __construct(Personne $personne, Profil $profil, string $newLogin, string $newPassword, string $newService){
        parent::__construct($personne->getId(), $personne->getNom(), $personne->getPrenom(), $personne->getMail(), $personne->getTelephone(), $personne->getSalaire());
        $this->profil = $profil;
        $this->login = $newLogin;
        $this->password = $newPassword;
        $this->service = $newService;
      
        }


        public function sePresenter(): string{
            return "l'utilisateur a un id " . $this->profil->getIdp() . " son code est " . $this->profil->getCode() . " et son libelle est " .$this->profil->getLibelle() . 
            "\n ensuite il a pour login " .$this->login . " son password est " . $this->password . " et son service est " . $this->service . "a pour id " . $this->id . " , son nom est " .$this->nom . " , son prenom est " . $this->prenom . ", son mail est " 
            . $this->mail . "\n son numero de telephone est " . $this->telephone . " et son salaire est " . $this->salaire . " \n";
        }


        function calculerSalaire() : float{
    
                if ($this->profil->getCode()== "MN"){
                   return $this->salaire * 1.10;
    
                }elseif ($this->profil->getCode()== "DG"){
                    return $this->salaire * 1.40;
                }
                return $this->salaire;
        }    


    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
    
    /**
     * Get the value of idp
     */ 
    public function getIdp()
    {
        return $this->idp;
    }

    /**
     * Set the value of idp
     *
     * @return  self
     */ 
    public function setIdp($idp)
    {
        $this->idp = $idp;

        return $this;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    public function __toString() :string
        {
            return 
            "[idp] : " . $this->profil->getIdp() . 
            "\n [code] : " . $this->profil->getCode() . 
            "\n [libelle] : " . $this->profil->getLibelle() . 
            "\n [login] : " . $this->login .
            "\n [password] : " . $this->password .
            "\n [service] : " . $this->service . 
            "\n [id] : " . $this->id . 
            "\n [nom] : " . $this->nom .
            "\n [prenom] : "  . $this->prenom .
            "\n [mail] : " . $this->mail . 
            "\n [telephone] : " . $this->telephone .
            "\n [salaire] : " . $this->salaire .
            "\n "
            ;
        }

}