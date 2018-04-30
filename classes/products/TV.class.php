<?php
    interface ModeInterface
    {
        public function turnOn();
        public function turnOff();
    }
    
    final class TV extends Product implements ModeInterface
    {
      const MAXDIAG = 120;
      private $type = 'LCD';
      private $types = ['LCD', 'plasma', 'OLED', 'tube'];
      private $diagSize = 32;

    public function setType($type)
    {
        if (((trim($type)) !== null) && (in_array($type, $this->types))) {
            $this->type = trim($type);
        }
    }

    public function setDiag($diag)
    {
        if (($diag > 0) && ($diag < (TV::MAXDIAG))) {
            $this->diagSize = $diag;
        }
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDiag()
    {
        return $this->diagSize;
    }

    public function turnOn()
    {
        echo "<p>TV is On</p>";
    }

    public function turnOff()
    {
        echo "<p>TV is Off</p>";
    }

    public function printInfo()
    {
        $info = "TV: " . $this->getName() . 
                "; price: " . $this->getPrice() . 
                "; type: " . $this->getType() .
                "; diag: " . $this->getDiag();
        echo $info . "<br>";
    }

    public function __construct ($modelName, $price, $discount, $type, $diag)
    {
        parent::__construct($modelName, $price, $discount);
        $this->setType($type);
        $this->setDiag($diag);
    }

}//end class TVset


