<?php

class Oefening
{
    public function getAnalyse($getal1, $getal2)
    {
        // ...  
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
            print($oef->getAnalyse(7, 2));
            ?>
        </h1>
    </body>
</html>