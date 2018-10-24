<?php
$getal1 = 20;
$getal2 = 30; 

$tmpNumber = $getal1;
$getal1    = $getal2;
$getal2    = $tmpNumber;

print("Getal 1: " . $getal1 . "<br>");
print("Getal 2: " . $getal2);