<?php

include_once ('Batiment.php');

class Maison extends Batiment{

        
        private $nbPieces;
    
        public function __construct(int $newNbPieces, string $newAdresse, int $newSuperficie){
        $this->nbPieces = $newNbPieces;
        $this->adresse = $newAdresse;
        $this->superficie = $newSuperficie;
        }

        public function sePresenter(): string{
            return "la maison a " . $this->nbPieces . " pieces à vivre \n";
        }

        /**
         * Get the value of nbPieces
         */ 
        public function getNbPieces() : int
        {
                return $this->nbPieces;
        }

        /**
         * Set the value of nbPieces
         *
         * @return  self
         */ 
        public function setNbPieces($nbPieces) : self
        {
                $this->nbPieces = $nbPieces;

                return $this;
        }

        public function __toString() :string
        {
            return 
            "[adresse] :" . $this->adresse . 
            "\n [superficie] : " . $this->superficie .
            "\n [nbPieces] :"  . $this->nbPieces .
            "\n "
            ;
        }
    }