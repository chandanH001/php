<?php

$num = -100;
// Using if statement
if ($num > 0) {
$result = 'positive';
}
elseif ($num < 0) {
$result = "negative";
if( $num < -10) {
$result = "value is below -10";
}
}
else {
$result = "its zero";
}
echo $result;
Hello




