<?php

class Excersise
{
    public function displaySteps()
    {
        for ($i = 20; $i <= 50; $i = $i+2) {
            echo $i . '<br>';
        }
    }
}

$excersise = new Excersise();
$excersise->displaySteps();