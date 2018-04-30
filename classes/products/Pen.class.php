<?php
    interface WritingInterface
    {
        public function write($word);
    }
    
    final class Pen extends Product implements ColorInterface, WritingInterface
    {
        private $type = 'automatic';
        private $material = 'plastic';

        public function setColor($color)
        {
            if ((trim($color)) !== null) {
                $this->color = trim($color);
            }
        }

        public function setType($type)
        {
            if ((trim($type)) !== null) {
                $this->type = trim($type);
            }
        }

        public function setMaterial($material)
        {
            if ((trim($material)) !== null) {
                $this->material = trim($material);
            }
        }

        public function getColor()
        {
            return $this->color;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getMaterial()
        {
            return $this->material;
        }
        
        public function write($word)
        {
            echo "<p>Pen writing: <b><i>$word</i></b></p>";
        }

        public function printInfo()
        {
            $info = "Pen: ".$this->getName() . 
                    "; price: " . $this->getPrice() . 
                    "; color: " . $this->getColor() . 
                    "; type: " . $this->getType() .
                    "; material: " . $this->getMaterial();
            echo $info . "<br>";
        }

        public function __construct ($modelName, $price, $discount, $color, $type, $material)
        {
            parent::__construct($modelName, $price, $discount);
            $this->setColor($color);
            $this->setType($type);
            $this->setMaterial($material);
        }
    }//end class Pen


