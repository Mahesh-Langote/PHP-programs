<?php
class MathOperation {
    public function add() {
        $args = func_get_args();
        $numArgs = func_num_args();
        $sum = 0;
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }
}

$math = new MathOperation();
echo "Sum: " . $math->add(2, 3, 4, 5);
?>
