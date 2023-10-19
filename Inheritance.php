<?php
class Animal {
    public function sound() {
        echo "Animal sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark";
    }
}

$dog = new Dog();
$dog->sound();
?>
