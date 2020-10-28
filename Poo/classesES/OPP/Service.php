<?php 

class Service { 

    private $noserv;
    private $service;
    private $ville;

    public function __construct(int $newNoserv, string $newService, string $newVille){
        $this->noserv = $newNoserv;
        $this->service = $newService;
        $this->ville = $newVille;
  }

    public function sePresenter(): string{
        return "numero de service : " . $this->noserv . 
        "\n service : " . $this->service . "\n  ville :  " . $this->ville . "\n \n \n";
    }
  
    public function getNoserv() : int{
        return $this->noserv;
    }

    public function setNoserv(int $newNoserv): self{
        $this->noserv = $newNoserv;
        return $this;
    }
    
    public function getService() : string{
        return $this->service;
    }

    public function setService(string $newService): self{
        $this->service = $newService;
        return $this;
    }

    public function getVille() : int{
        return $this->ville;
    }
    
    public function setVille(int $newVille): self{
        $this->ville = $newVille;
        return $this;
    }


    public function __toString() :string
    {
        return 
        "[noserv] :" . $this->noserv . 
        "\n [service] :" . $this->service . 
        "\n [ville] :" . $this->ville . 
        "\n \n \n"
        ;
    }

}



