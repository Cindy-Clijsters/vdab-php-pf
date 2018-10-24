<?php
class Rekenmachine { 
    public function getKwadraat($getal) { 
        $kwad = $getal * $getal; 
        return $kwad; 
    } 
    
    public function getSom($getal1, $getal2) {
        $resultaat = $getal1 + $getal2;
        return $resultaat;      
    }    
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset=utf-8>
    <title>Rekenmachine</title>
</head>
<body>
    <h1>
        <?php
        $reken = new Rekenmachine();
        print($reken->getKwadraat(5)); 
        ?>
    </h1>
    
    <h1>
        <?php print($reken->getSom(65, 8)); ?>
    </h1>
</body>
</html>