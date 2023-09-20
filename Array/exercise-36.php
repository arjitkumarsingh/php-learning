<?php
// 36. Write a PHP script to lower-case and upper-case, all elements in an array.

$colors = array("Red", "Green", "Black", "White");

print_r(array_map("strtolower", $colors));
echo "<br>";
print_r(array_map("strtoupper", $colors));
?>