<?php
class ParentClass {
    public static function whoAmI() {
        echo static::class;
    }
}

class ChildClass extends ParentClass {}

ParentClass::whoAmI(); // Output: ParentClass
echo "<br>";
ChildClass::whoAmI(); // Output: ChildClass
?>
