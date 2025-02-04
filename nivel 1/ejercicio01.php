<?php

    // padre
    interface Animal {
        public function makeSound();
    }

    // hijos
    class Cat implements Animal {
        public function makeSound()
        {
            echo "Meow!!" . PHP_EOL;
        }
    }

    class Dog implements Animal {
        public function makeSound()
        {
            echo "Woof!!" . PHP_EOL;
        }
    }

    // crear objetos
    $cat = new Cat();
    $dog = new Dog();

    // utilizo el metodo
    $cat -> makeSound();
    $dog -> makeSound();

?>