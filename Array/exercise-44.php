<?php
// 44. Write a PHP a function to remove a specified, duplicate entry from an array.

$numbers = array(4, 5, 6, 7, 4, 7, 8);

print_r(removeSpecificDupilcate($numbers, 4));

function removeSpecificDupilcate($array, $duplicate) {
    $my_array = [];
    foreach ($array as $value) {
        if ($value != $duplicate) {
            $my_array[] = $value;
        } elseif (!in_array($duplicate, $my_array)) {
            $my_array[] = $value;
        }
    }
    return $my_array;
}

// OR
echo "<br>";

print_r(array_uniq($numbers, 4));

function array_uniq($array, $duplicate) { 
    $flag = false; 
    foreach($array as $key => $value) {
        if ($value == $duplicate && $flag) { 
            unset($array[$key]); 
        }
        if ($value == $duplicate){
            $flag = true;
        }
    } 
    return $array; 
} 