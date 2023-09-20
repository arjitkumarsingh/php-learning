<?php
// 40. Write a PHP program to get a sorted array without preserving the keys.

$my_array = array("red", "black", "green", "black", "white", "yellow");
array_unique($my_array);

echo "<pre>";
print_r($my_array);
echo "</pre>";

sort($my_array);

echo "<pre>";
print_r($my_array);
echo "</pre><br>";

// to get a unique sorted array without preserving the keys

$array1 = array_keys(array_flip(array_unique($my_array)));

echo "<br><pre>";
print_r($array1);
echo "</pre>";

// OR

$array2 = array_values(array_unique($my_array));

echo "<pre>";
print_r($array2);
echo "</pre>";
?>