<?php

class Oefening
{
    /**
     * Make an analyse of the numbers
     * 
     * @param int $number1
     * @param int $number2
     * 
     * @return string
     */
    public function getAnalyse($number1, $number2)
    {
        if (is_numeric($number1) && is_numeric($number2)) {
            if ($number1 > $number2) {
                $result = "Het eerste getal is groter dan het tweede";
            } else {
                $result = "Het eerste getal is niet groter dan het tweede";
            }
        } else {
            $result = "De beide getallen moeten een numerieke waarde bevatten";
        }
        
        return $result;
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Analyse</title>
    </head>
    <body>
        <h1>
            <?php
            $oef = new Oefening();
            echo $oef->getAnalyse(7, 2);
            ?>
        </h1>
        <h1>
            <?php
            $oef = new Oefening();
            echo $oef->getAnalyse(2, 7);
            ?>
        </h1>
        <h1>
            <?php
            $oef = new Oefening();
            echo $oef->getAnalyse(7, 7);
            ?>
        </h1>
    </body>
</html>