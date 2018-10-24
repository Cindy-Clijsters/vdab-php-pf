<?php
class Vergelijking {
    
    public function getSomIsStriktPositief($getal1, $getal2)
    {
        $antw = (($getal1 + $getal2) > 0);
        
        if ($antw == true) {
            return "JA";
        } else {
            return "NEEN";   
        }        
    }
    
} ?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Vergelijking</title>
    </head>
    <body>
        <h1>
            <?php
            $vgl = new Vergelijking();
            print($vgl->getSomIsStriktPositief(10, -9));
            ?>
        </h1>
    </body>
</html>