<?php
    interface SpeedInterface
    {
        public function setSpeed($speed);
        public function getSpeed();
    }
    
    final class Car extends Product implements ColorInterface, SpeedInterface
    {
        use ColorTrait;
        
        private $speed = 0;

        public function setSpeed($speed) {
            if (($speed > 0) && ($speed <=300)) {
                $this->speed = (int)$speed;
            }
        }
        
        public function getSpeed()
        {
            return $this->speed;
        }

        //переопределяем метод printInfo
        public function printInfo()
        {
            $info = "Car: " . $this->getName() . 
                    "; price: " . $this->getPrice() .
                    "; color: " . $this->getColor() .
                    "; speed: " . $this->getSpeed();
            echo $info ."<br>";
        }

        public function __construct ($modelName, $price, $discount, $color, $speed)
        {
            parent::__construct($modelName, $price, $discount);
            $this->setColor($color);
            $this->setSpeed($speed);
        }
    } //end class Car



