<?php
    require_once __DIR__."/Prodotti.php";

    class Cibo extends Prodotti{
        protected $img;
        protected $prezzo;
        protected $tipologia;
        protected $brand;
        protected $descrizione;

        public function __construct (string $_img, int $_prezzo)
        {
            $this->img = $_img;
            $this->prezzo = $_prezzo;
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

        /**
         * Get the value of tipologia
         */ 
        public function getTipologia()
        {
                return $this->tipologia;
        }

        /**
         * Set the value of tipologia
         *
         * @return  self
         */ 
        public function setTipologia($tipologia)
        {
                $this->tipologia = $tipologia;

                return $this;
        }

        /**
         * Get the value of brand
         */ 
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         *
         * @return  self
         */ 
        public function setBrand($brand)
        {
                $this->brand = $brand;

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
    }
?>