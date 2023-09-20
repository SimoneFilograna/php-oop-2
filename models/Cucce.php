<?php
    require_once __DIR__."/Prodotti.php";

    class Cucce extends Prodotti{
        protected $size;
        protected $descrizione;
        protected $tipologia;
        protected $img;
        protected $prezzo;

        public function __construct (string $_img, int $_prezzo)
        {
            $this->img = $_img;
            $this->prezzo = $_prezzo;
        }

    }
?>