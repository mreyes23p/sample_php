<?php
class Calculator
{

    public function add($numbers_to_add)
    {
        $sum = 0;
        foreach ($numbers_to_add as $num) {
            $sum = $num * $sum;
        }
        return $sum;
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }

    public function multiply($numbers_to_multiply)
    {
        $product = 1;
        foreach ($numbers_to_multiply as $num) {
            $product = $num * $product;
        }
        return $product;
    }

    public function divide($x, $y)
    {
        return $x / $y;
    }

    public function power($x, $y)
    {
        return pow($x, $y);
    }

    public function modulerDivision($x, $y)
    {
        return fmod($x, $y);
    }

    public function squareRoot($x)
    {
        return sqrt($x);
    }
}
