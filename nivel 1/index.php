<?php

    require_once "Animal.php";
    require_once "Cat.php";
    require_once "Dog.php";

    // crear objetos
    $cat = new Cat();
    $dog = new Dog();

    // utilizo el metodo
    echo $cat ->makeSound() . PHP_EOL;
    echo $dog -> makeSound();

?>