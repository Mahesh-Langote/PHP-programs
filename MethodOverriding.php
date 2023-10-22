<?php
class Animal {
    public function sound() {
        echo "Animal sound";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Woof";
    }
}

$dog = new Dog();
$dog->sound();
?>
