<?php

class Excercise
{
    public function getSum($number1, $number2)
    {
        $sum = $number1 + $number2;
        return $sum;
    }
}

$number1 = filter_input(INPUT_GET, 'number1', FILTER_VALIDATE_INT);
$number2 = filter_input(INPUT_GET, 'number2', FILTER_VALIDATE_INT);

if ($number1 !== null && $number1 !== false && $number2 !== null && $number2 !== false) {
    $excercise = new Excercise();
    echo $excercise->getSum($number1, $number2);    
} else {
    echo 'De getallen zijn niet integer';
}


