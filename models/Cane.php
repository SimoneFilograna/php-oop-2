<?php 
    require_once __DIR__."/Categoria.php";

    class Cane extends Categoria {
        public $img;

        public function __construct()
        {
            $this->img ='<i class="fa-solid fa-dog"></i>';
        }

    }
?>