<?php
 
class Excercise
{
    public function displayNumbers()
    {
        $random = rand(10, 20);
        
        for ($i = 1; $i <= $random; $i++) {
            echo $i . '<br>';
        }
    }
}

$excersise = new Excercise();
$excersise->displayNumbers();