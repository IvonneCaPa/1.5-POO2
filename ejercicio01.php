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
            echo "Woof!!";
        }
    }

    // crear objetos
    $cat = new Cat();
    $cat -> makeSound();






?>