<?php 

Class Manager extends Personne {

    private $service;
 

    public function __construct(int $id, string $nom, string $prenom, string $mail, int $telephone, int $salaire, string $service){
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
        }


    public function sePresenter(): string{
        return "l'id du manager est " . $this->id . " son nom est " .$this->nom . ", son prenom est  " . $this->prenom . ", son mail est " 
        . $this->mail . " son numero de telephone est " . $this->telephone . " et son salaire est " . $this->salaire . ", \n il est le " . self::$counter . 
        " ieme et son service est : " . $this->service . "\n";
    }

   

    function calculerSalaire(): float {
        return $this->salaire *1.20;
    }
            

    function affiche() : void {
        echo $this;
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
        "\n [service] : " . $this->service . 
        "\n "
        ;
    }
}