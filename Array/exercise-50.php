<?php
// 50. Write a PHP script to get the last value of an array without affecting the pointer.

$colors = array('c1' => 'Red',  'c2' => 'Green',  'c3' => 'White',  'c4' => 'Black');

echo next($colors) . "<br>";
$last = array_pop(array_keys(array_flip($colors)));
echo $last . "<br>";
echo current($colors) . "<br><br><br>";

// OR

echo next($colors) . "<br>";
$last = end(array_keys($colors));
echo $colors[$last] . "<br>";
echo current($colors) . "<br>";
?>