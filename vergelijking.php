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
    
    /**
     * Check if sum of params is strict negative
     * 
     * @param int $number1
     * @param int $number2
     * @param int $number3
     * 
     * @return string
     */
    public function isSumStrictNegative($number1, $number2, $number3)
    {        
        if (is_numeric($number1) && is_numeric($number2) && is_numeric($number3)) {
            $sum = $number1 + $number2 + $number3;
            
            if ($sum < 0) {
                $result = "Yes";
            } else {
               $result = "No";     
            }
        } else {
            $result = "De parameters moeten een numeriek waarde bevatten.";
        }
        
        return $result;
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
        
        <h1><?php echo $vgl->isSumStrictNegative(10, -9, -5); ?></h1>
        
        <h1><?php echo $vgl->isSumStrictNegative(1, -9, 10); ?></h1>

        <h1><?php echo $vgl->isSumStrictNegative(2, 2, -4); ?></h1>     
        
        <h1><?php echo $vgl->isSumStrictNegative(2, 2, 'a'); ?></h1> 
    </body>
</html>