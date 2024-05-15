<?php
 
    abstract class Animal {
        public $name;
        public function __construct($name) {
            $this -> name = $name;
        }
        abstract public function makeSound();
    }

    class Cat extends Animal {
        public function makeSound()
        {
            echo "Hola soy un gato ¡Meeow!";
        }
    }

    class Dog extends Animal {
        public function makeSound()
        {
            echo "Hola soy un Perro ¡Bup Bup!";
        }
    }

    $cat = new Cat("Felicia");
    echo $cat ->makeSound();
    echo "<br>";
    
    $dog = new Dog("Snoop");
    echo $dog ->makeSound();
?>






