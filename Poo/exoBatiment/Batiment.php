<?php


class Batiment {

        protected $adresse;
        protected $superficie;
    
        public function __construct(string $newAdresse, $newSuperficie){
        $this->adresse = $newAdresse;
        $this->superficie = $newSuperficie;
        }
    

        public function sePresenter(): string{
            return "Le Batiment se trouve a " . $this->adresse . " et fait  " . $this->superficie . " m²  \n";
        }
        
        /**
         * Get the value of adresse
         */ 
        public function getAdresse() : string
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse) : self
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of superficie
         */ 
        public function getSuperficie() : int
        {
                return $this->superficie;
        }

        /**
         * Set the value of superficie
         *
         * @return  self
         */ 
        public function setSuperficie($superficie) : self
        {
                $this->superficie = $superficie;

                return $this;
        }

        public function __toString() :string
        {
            return 
            " [adresse] :" . $this->adresse . 
            "\n [superficie] :" . $this->superficie . 
            "\n "
            ;
        }
}