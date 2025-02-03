<?php

    //clase padre
    abstract class Animal {
        abstract public function makeSound();
    }

    //hijos
    class Dog extends Animal {
        public function makeSound() : string {
            return "Woof!";
        }
    }

    class Cat extends Animal {
        public function makeSound() : string {
            return "Meow!";
        }
    }

    // Crear objeto y llamar al metodo
    $dog = new Dog();
    echo $dog->makeSound() . PHP_EOL; 

    $cat = new Cat();
    echo $cat->makeSound() . PHP_EOL; 

?>