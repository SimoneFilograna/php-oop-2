<?php
    class Categoria {
        protected $name;

        public function __construct(string $_name)
        {
            $this->name = $_name;          
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
    }
?>