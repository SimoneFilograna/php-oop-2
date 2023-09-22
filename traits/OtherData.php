<?php
    trait OtherData {
        protected $taglia;

        /**
         * Get the value of taglia
         */ 
        public function getTaglia()
        {
                return $this->taglia;
        }

        /**
         * Set the value of taglia
         *
         * @return  self
         */ 
        public function setTaglia($taglia)
        {
                $this->taglia = $taglia;

                return $this;
        }
    }
?>

