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
    
    /**
     * Multiply 2 numbers
     * 
     * @param float $number1
     * @param float $number2
     * 
     * @return float|string
     */
    public function multiply($number1, $number2)
    {
        if (is_numeric($number1) && is_numeric($number2)) {
            $result = $number1 * $number2;
        } else {
            $result = "Beide parameters moeten een numeriek waarde bevatten.";
        }
        
        return $result;
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset=utf-8>
    <title>Rekenmachine</title>
    <style type="text/css">
        h1 {
            color: red;
        }
    </style>
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
    
    <h1>
        <?php echo $reken->getSom(34, 55); ?>
    </h1>
    
    <h1><?php echo $reken->multiply(2, 4); ?></h1>
</body>
</html>