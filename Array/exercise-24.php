<?php
// 24. Write a PHP script to sort an array using case-insensitive natural ordering.

$colors = array("color1", "color20", "color3", "color2");

sort($colors, SORT_NATURAL | SORT_FLAG_CASE);

print_r($colors);
?>