<?php
// 56. Write a PHP script to create a two-dimensional array (4x4), initialized to 10.

$result = array_fill(0, 4, array_fill(0, 4, 10));

echo "<pre>";
print_r($result);
echo "</pre>";
?>