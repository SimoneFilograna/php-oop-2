<?php
    require_once __DIR__."/Categoria.php";

    class Prodotti {
        protected $nome;
        protected $casa_produzione;
        private $seriale;
        protected $categoria;
        
        public function __construct(string $_nome,int $_seriale,string $_categoria)
        {
                $this->setNome($_nome);
                $this->seriale = $_seriale;
                $this->setCategoria($_categoria);
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                if(is_numeric($nome)){
                        throw new Exception("La ricerca non può essere un numero");                       
                } else {
                        $this->nome = $nome;                       
                        return $this;                             
                }
        }


        /**
         * Get the value of seriale
         */ 
        public function getSeriale()
        {
                return $this->seriale;
        }


        /**
         * Get the value of categoria
         */ 
        public function getCategoria()
        {
                return $this->categoria;
        }

        /**
         * Set the value of categoria
         *
         * @return  self
         */ 
        public function setCategoria($categoria)
        {
                $this->categoria = $categoria;

                return $this;
        }
    }
?>