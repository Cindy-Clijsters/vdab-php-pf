<?php

class Excersise 
{
    public function displayNumbers()
    {
        $number = random(1, 1000);
        echo $number . '<br>';
        
        while($number <= 600) {
            $number = random(1, 1000);
            echo $number . '<br>';
        }
    } 
}