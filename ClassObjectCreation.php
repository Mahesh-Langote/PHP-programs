<?php
class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function displayDetails() {
        echo "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

$car1 = new Car("Toyota", "Corolla");
$car1->displayDetails();
?>
