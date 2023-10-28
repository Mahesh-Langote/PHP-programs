<?php
class Math {
    const PI = 3.14;

    public static function areaOfCircle($radius) {
        return self::PI * $radius * $radius;
    }
}

echo "Area of circle with radius 5: " . Math::areaOfCircle(5);
?>
