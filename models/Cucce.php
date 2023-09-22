<?php
    require_once __DIR__."/Prodotti.php";

    class Cucce extends Prodotti{
        protected $size;
        protected $descrizione;
        protected $tipologia;
        protected $img;
        protected $prezzo;

        public function __construct (string $_nome, string $_categoria, string $_img, int $_prezzo, string $_taglia)
        {
            $this->setNome($_nome);
            $this->setCategoria($_categoria);
            $this->setImg($_img);
            $this->setPrezzo($_prezzo);
            $this->taglia = $_taglia;
        }


        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

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