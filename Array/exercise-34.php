<?php
// 34. Write a PHP program to sort an associative array (alphanumeric with case-sensitive data) by values.

$test_array = array(0 => 'example1', 1 => 'Example11', 2 => 'example10', 3 => 'Example6', 4 => 'example4', 5 => 'EXAMPLE40', 6 => 'example10');

natcasesort($test_array);
// asort($test_array, SORT_NATURAL | SORT_FLAG_CASE);
print_r($test_array);