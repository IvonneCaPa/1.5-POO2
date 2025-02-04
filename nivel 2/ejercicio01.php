<?php

    // Padre
    abstract class Shape{
        public $height;
        public $width;

        //constructor
        public function __construct($height, $width)
        {
            $this -> height = $height;
            $this -> width = $width;
        }

        //metodo abstracto
        abstract public function area():string;
    }

    // hijos
    class Rectangle extends Shape{
        public function area():string
        {
            $area = $this->height * $this->width;
            return "El área del Rectangulo es: $area";
        }
    }

    class Triangle extends Shape{
        public function area(): string
        {
            $area = $this->height * $this->width / 2;
            return "El área del Triangulo es: $area";
        }

    }

    // creo objetos
    $rectangulo = new Rectangle(4,5);
    $triangulo = new Triangle(4,5);

    //utilizo 
    echo $rectangulo -> area() . PHP_EOL;
    echo $triangulo -> area() . PHP_EOL;

?>  