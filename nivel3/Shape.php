<?php
    // Padre
    abstract class Shape{
        public int|float $height;
        public int|float $width;

        //constructor
        public function __construct($height, $width)
        {
            $this -> height = $height;
            $this -> width = $width;
        }

        //metodo abstracto
        abstract public function area():string;
    }
?>  