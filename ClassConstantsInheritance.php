<?php
class Shape {
    const SHAPE_TYPE = "Generic Shape";
}

class Circle extends Shape {
    const SHAPE_TYPE = "Circle";
}

echo "Shape Type: " . Shape::SHAPE_TYPE . "<br>";
echo "Circle Shape Type: " . Circle::SHAPE_TYPE;
?>
