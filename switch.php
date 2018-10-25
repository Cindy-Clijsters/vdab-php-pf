<?php
class Excersise
{
    public function displayNumber($number)
    {
        if (is_numeric($number)) {
            
            $intNumber = (int)$number;
            
            switch($intNumber) {
                case 1:
                    $result = 'Een';
                    break;
                case 2:
                    $result = 'Twee';
                    break;
                case 3:
                    $result = 'Drie';
                    break;
                case 4:
                    $result = 'Vier';
                    break;
                case 5:
                    $result = 'Vijf';
                    break;
                default:
                    $result = $number;   
            }
            
        } else {
            $result = "Het getal moet een numerieke waarde bevatten";
        }
        
        return $result;
    }
}

$excersise = new Excersise();
echo $excersise->displayNumber(1) . '<br>';
echo $excersise->displayNumber(-1) . '<br>';
echo $excersise->displayNumber("a") . '<br>';
echo $excersise->displayNumber(8) . '<br>';
echo $excersise->displayNumber(3.2) . '<br>';
echo $excersise->displayNumber(8.2) . '<br>';