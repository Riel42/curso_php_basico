<?php

        # GETTERS AND SETTERS  #
        # With this functions, I can set and get private variables on my class

        class Human{
                private $years_old;

                public function setYearsOld($value){
                        if(is_numeric($value)){ # if $value is a numeric value:
                                $this->years_old = $value;
                        }
                }

                public function getYearsOld(){
                        return $this->years_old;
                }
        }

        $me = new Human();

        $me->setYearsOld("Hello, world!"); #I can't do this
        echo $me->getYearsOld() . "<br>";

        $me->setYearsOld(42); #It's possible
        echo $me->getYearsOld() . "<br>";


?>

