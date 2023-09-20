<?php
/*
45. Write a PHP script to do a multi-dimensional difference, i.e. returns values of the first array that are not in the second array.
Note : Use array_udiff() function.
*/

$color1 = array( array('Reda', 80), array('Greenb', 70), array('whitec', 60) );         
$color2 = array( array('Greend', 70), array('Blacke', 95) ); 

$result = array_udiff($color1, $color2, "getDifferenceArray");

echo "<pre>";
print_r($result);
echo "</pre>";

function getDifferenceArray($a, $b) {
    print_r($a);
    echo "<br>";
    print_r($b);
    echo "<br><br><br><br>";
    return $a <=> $b;
}
?>