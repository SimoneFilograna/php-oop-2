<?php
    require_once __DIR__."/Prodotti.php";

    class Giochi extends Prodotti{
        protected $color;
        protected $eta_consigliata;
        protected $rinnovab;
        protected $descrizione;
        protected $tipologia;
        protected $img;
        protected $prezzo;


        public function __construct (string $_nome, string $_categoria, string $_img, int $_prezzo)
        {
                $this->nome = $_nome;
                $this->categoria = $_categoria;
                $this->img = $_img;
                $this->prezzo = $_prezzo;
        }


        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }

        /**
         * Get the value of eta_consigliata
         */ 
        public function getEta_consigliata()
        {
                return $this->eta_consigliata;
        }

        /**
         * Set the value of eta_consigliata
         *
         * @return  self
         */ 
        public function setEta_consigliata($eta_consigliata)
        {
                $this->eta_consigliata = $eta_consigliata;

                return $this;
        }

        /**
         * Get the value of rinnovab
         */ 
        public function getRinnovab()
        {
                return $this->rinnovab;
        }

        /**
         * Set the value of rinnovab
         *
         * @return  self
         */ 
        public function setRinnovab($rinnovab)
        {
                $this->rinnovab = $rinnovab;

                return $this;
        }

        /**
         * Get the value of descrizione
         */ 
        public function getDescrizione()
        {
                return $this->descrizione;
        }

        /**
         * Set the value of descrizione
         *
         * @return  self
         */ 
        public function setDescrizione($descrizione)
        {
                $this->descrizione = $descrizione;

                return $this;
        }

        /**
         * Get the value of img
         */ 
        public function getImg()
        {
                return $this->img;
        }

        /**
         * Set the value of img
         *
         * @return  self
         */ 
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }

        /**
         * Get the value of prezzo
         */ 
        public function getPrezzo()
        {
                return $this->prezzo;
        }

        /**
         * Set the value of prezzo
         *
         * @return  self
         */ 
        public function setPrezzo($prezzo)
        {
                $this->prezzo = $prezzo;

                return $this;
        }
    }


?>