<?php
abstract class Shape {
    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo "Area of Circle: " . $circle->getArea();
?>
