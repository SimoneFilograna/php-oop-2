<?php 
    require_once __DIR__."/Categoria.php";

    class Gatto extends Categoria {
        protected $img;

        public function __construct()
        {
            $this->img ='<i class="fa-solid fa-cat"></i>';
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
    }
?>