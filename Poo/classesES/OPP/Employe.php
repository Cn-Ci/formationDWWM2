<?php 

class Employe {

    private $no_emp;
    private $nom;
    private $prenom;
    private $emploi;
    private $embauche; 
    private $sal;
    private $comm;
    private $noserv;
    private $sup;
    private $noproj;

    public function __construct(int $newNo_emp, string $newNom, string $newPrenom, string $newEmploi, string $newEmbauche, float $newSal, float $newComm, string $newNoserv, int $newSup, int $newNoproj){
          $this->no_emp = $newNo_emp;
          $this->nom = $newNom;
          $this->prenom = $newPrenom;
          $this->emploi = $newEmploi;
          $this->embauche = $newEmbauche;
          $this->sal = $newSal;
          $this->comm = $newComm;
          $this->noserv = $newNoserv;
          $this->sup = $newSup;
          $this->noproj = $newNoproj;

    }

    public function sePresenter(): string{
        return "Je suis en employé,\n mon numero d'employé est " . $this->no_emp . "\n nom : " . $this->nom . "\n prenom : " . $this->prenom . "\n emploi : " . $this->emploi . 
        "\n embauche : " . $this->embauche . "\n salaire : " . $this->sal . " \n commission : " . $this->comm . 
        "\n numero de service : " . $this->noserv . "\n superieur : " . $this->sup . " \n numero de projet : " . $this->noproj . "\n \n \n";
    }

    public function getNo_emp() : int{
        return $this->no_emp;
    }

    public function setNo_emp(int $newNo_emp): self{
        $this->no_emp = $newNo_emp;
        return $this;
    }

    public function getNom() : string{
        return $this->nom;
    }

    public function setNom(string $newNom): self{
        $this->nom = $newNom;
        return $this;
    }

    public function getPrenom() : string{
        return $this->prenom;
    }

    public function setPrenom(string $newPrenom): self{
        $this->prenom = $newPrenom;
        return $this;
    }

    public function getEmploi() : string{
        return $this->emploi;
    }

    public function setEmploi(string $newEmploi): self{
        $this->emploi = $newEmploi;
        return $this;
    }

    public function getEmbauche() : int{
        return $this->embauche;
    }

    public function setEmbauche(int $newEmbauche): self{
        $this->embauche = $newEmbauche;
        return $this;
    }

    public function getSal() : int{
        return $this->sal;
    }

    public function setSal(int $newSal): self{
        $this->sal = $newSal;
        return $this;
    }

    public function getComm() : int{
        return $this->comm;
    }

    public function setComm(int $newComm): self{
        $this->comm = $newComm;
        return $this;
    }

    public function getNoserv() : int{
        return $this->noserv;
    }

    public function setNoserv(int $newNoserv): self{
        $this->noserv = $newNoserv;
        return $this;
    }

    public function getSup() : int{
        return $this->sup;
    }

    public function setSup(int $newSup): self{
        $this->sup = $newSup;
        return $this;
    }

    public function getNoproj() : int{
        return $this->noproj;
    }

    public function setNoproj(int $newNoproj): self{
        $this->noproj = $newNoproj;
        return $this;
    }

    public function __toString() :string
    {
        return 
        " [No_emp] :" . $this->no_emp . 
        "\n [nom] :" . $this->nom . 
        "\n [prenom] :" . $this->prenom .
        "\n [emploi] :" . $this->emploi . 
        "\n [embauche] :" . $this->embauche . 
        "\n [sal] :" . $this->sal . 
        "\n [comm] :" . $this->comm . 
        "\n [noserv] :" . $this->noserv . 
        "\n [sup] :" . $this->sup . 
        "\n [noproj] :" . $this->noproj . 
        "\n \n \n"
        ;
    }
}