<?php
    require_once "Shape.php";
    require_once "Rectangle.php";
    require_once "Triangle.php";

    // creo objetos
    $rectangulo = new Rectangle(4,5);
    $triangulo = new Triangle(4,5);

    //utilizo 
    echo PHP_EOL . $rectangulo -> area() . PHP_EOL;
    echo $triangulo -> area() . PHP_EOL;
?>  