<?php
// 35. Write a PHP script to trim all the elements in an array using array_walk function.

$colors = array("Red ", " Green", "Black ", " White ");

echo "<pre>";
print_r($colors);
echo "</pre>";

array_walk($colors, "cleanArray");

echo "<pre>";
print_r($colors);
echo "</pre>";

function cleanArray(&$value) {
    $value = trim($value);
}
?>