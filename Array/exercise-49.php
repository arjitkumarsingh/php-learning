<?php
/*
49. Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.
Test Data : 1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')
2nd array : ('c2', 'c4')
Output :
Array
(
[c2] => Green
[c4] => Black
)
*/

$array1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$array2 = array('c2', 'c4');

print_r(array_intersect_key($array1, array_flip($array2)));
?>