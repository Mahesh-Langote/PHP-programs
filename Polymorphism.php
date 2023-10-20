<?php
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

function getArea(Shape $shape) {
    return $shape->area();
}

$rectangle = new Rectangle(5, 10);
$circle = new Circle(5);

echo "Rectangle Area: " . getArea($rectangle) . "\n";
echo "Circle Area: " . getArea($circle);
?>
