<?php
    require_once __DIR__."/Categoria.php";
    require_once __DIR__."/../traits/OtherData.php";

    class Prodotti {
        use OtherData;
        protected $nome;
        protected $casa_produzione;
        protected $categoria;
        private $seriale;
        
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
                try{
                        if(is_numeric($nome)){
                                throw new Exception("La ricerca non può essere un numero");                       
                        } else {
                                $this->nome = $nome;                       
                                return $this;                             
                        }
                } catch (Exception $error){
                        echo "<div class='alert alert-danger text-center fs-4'>". $error->getMessage(). "</div>";
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