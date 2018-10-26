<?php

class Excercise
{
    public function displayNumbers()
    {
        $number1 = 0;
        $number2 = 1;
        
        $sum = $number1 + $number2;
        
        
        
        while ($sum < 5000) {
            echo $sum . '<br>';
            
            $number1 = $number2;
            $number2 = $sum;
            
            $sum = $number1 + $number2;
        }
    }
}

$excercise = new Excercise();
$excercise->displayNumbers();