<?php


$tuition_fee = 15000;    

$twenty_five_percent = $tuition_fee * 0.25;  
$twenty_percent = $tuition_fee * 0.2;      
$fifteen_percent = $tuition_fee * 0.15;     
$Less = "Invalid";                  

//calculation
$commission = ($tuition_fee >= 20000) ? ($twenty_five_percent) : (($tuition_fee > 10000 && $tuition_fee < 20000) ? ($twenty_percent) : (($tuition_fee < 10000 && $tuition_fee > 7000) ? ($fifteen_percent) : $invalid));

echo $commission;
