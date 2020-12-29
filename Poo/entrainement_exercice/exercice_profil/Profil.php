<?php 

class Profil  {

    private $idp;
    private $code;
    private $libelle;
    
    public function __construct(string $newIdp, string $newCode, string $newLibelle){
        $this->idp = $newIdp ;
        $this->code = $newCode ; 
        $this->libelle = $newLibelle;
       
        }

        public function sePresenter(): string{
            return "le profil a pour idp " . $this->idp . "son code est " . $this->code . "et son libelle est " . $this->libelle . " a pour login " .$this->login . " son password est " . $this->password . "et son service est " . $this->service . " a pour id " . $this->id . " son nom est " .$this->nom . " , son prenom est  " . $this->prenom . ", son mail est " 
            . $this->mail . " son numero de telephone est " . $this->telephone . "et son salaire est " . $this->salaire . " \n";
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

    public function __toString() :string
        {
            return 
            "[idp] : " . $this->idp . 
            "\n [code] : " . $this->code . 
            "\n [libelle] : " . $this->libelle . 
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