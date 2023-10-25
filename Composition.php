<?php
class Engine {
    public function start() {
        echo "Engine started";
    }
}

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine();
    }

    public function start() {
        $this->engine->start();
    }
}

$car = new Car();
$car->start();
?>
