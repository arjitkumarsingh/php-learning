<?php
// 48. Write a PHP function to set union of two arrays.

$a = array(1, 2, 3, 4);
$b = array(2, 3, 4, 5, 6);

print_r(array_unique(array_merge($a, $b)));

// OR
echo "<br>";

print_r(getUnion($a, $b));

function getUnion($a, $b) {
    return array_merge(array_intersect($a, $b), array_diff($a, $b), array_diff($b, $a));
}