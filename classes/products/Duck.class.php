<?php

    final class Duck extends Product
    {
        public function move()
        {
            echo ' и плаваю!';
        }

        public function printInfo()
        {
            $info = "Duck: " . $this->getName() . 
                    "; price: " . $this->getPrice();
            echo $info ."<br>";
        }

        public function __construct ($name, $price, $discount)
        {
            parent::__construct($name, $price, $discount);
        }

    }//end class Duck
