<?php
    
    interface NameInterface
    {
        public function setName($productName);
        public function getName();
    }

    interface PriceInterface
    {
        public function setPrice($price);
        public function getPrice();
        public function setDiscount($discount);
        public function getDiscountedPrice();
    }

    interface ColorInterface
    {
        public function setColor($color);
        public function getColor();
    }
    
    trait NameTrait
    {
        private $name = 'unknown';
        
        public function setName($name)
        {
            $this->name = trim($name);
        }
        
        public function getName()
        {
            return $this->name;
        }
    }
    
    trait PriceTrait
    {
        private $price = 0;
        private $discount = 0;
        
        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getPrice()
        {
            return $this->price;
        }
        
        public function setDiscount($discount)
        {
            if (($discount > 0) && ($discount < 100)) {
                $this->discount = $discount;
            }
        }

        public function getDiscountedPrice()
        {
            $newPrice = round($this->price * (1 - $this->discount / 100), 2);
            return $newPrice;
        }
    }
    
    trait ColorTrait
    {
        private $colors = ['white', 'black', 'red', 'gray', 'silver', 'blue', 'green', 'yellow'];
        private $defaultColor = 'white';
        private $color;
        
        public function setColor($newColor)
        {
            if (trim($newColor) !== null) {
                if (in_array($newColor, $this->colors)) {
                    $this->color = trim($newColor);
                } else {
                    $this->color = $defaultColor;
                }
            }
        }

        public function getColor()
        {
            return $this->color;
        }
    }

    abstract class Product implements NameInterface, PriceInterface
    {
        use NameTrait, PriceTrait;

        abstract public function printInfo();
        
        public function __construct($name, $price, $discount)
        {
            $this->setName($name);
            $this->setPrice($price);
            $this->setDiscount($discount);
        }
    }
//end clacc Product
