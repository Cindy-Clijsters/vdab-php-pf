<?php

class Excersise 
{
    public function displayNumbers()
    {
        $number = rand(1, 1000);
        echo $number . '<br>';
        
        while($number <= 600) {
            $number = rand(1, 1000);
            echo $number . '<br>';
        }
    } 
}

$excersise = new Excersise();
$excersise->displayNumbers();