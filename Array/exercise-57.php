<?php
// 57. Write a PHP function to compares two multidimensional arrays and returns the difference.

$color1 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow'));
$color2 = array('a' => 'White', 'b' => 'Red', 'c' => array('a' => 'White', 'b' => 'Red', 'c' => 'Yellow'));

echo "<br>";
print_r(multidimensionalArrayDiff($color1['c'], $color2['c']));
echo "<br>";

function multidimensionalArrayDiff($a, $b) {
    // if (is_array($a) && is_array($b)) {
    return array_diff_assoc($a, $b);
    // }
    // return $a <=> $b;
}
?>