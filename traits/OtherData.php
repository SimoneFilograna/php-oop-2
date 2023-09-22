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

            try{
                if($taglia !== "xl" && $taglia !== "l" && $taglia !== "m" && $taglia !== "s"){
                        throw new Exception("La taglia può esser scelta solo tra 's', 'm', 'l', 'xl' ");                       
                } else {
                        $this->taglia = $taglia;                       
                        return $this;                             
                }
            } catch (Exception $error){
                echo "<div class='alert alert-danger text-center fs-4'>". $error->getMessage(). "</div>";
            }
        }
    }
?>

