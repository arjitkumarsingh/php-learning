<?php
// 47. Write a PHP function to get an array with the first key and value.

$colors = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'Black');

print_r(array_1st_element($colors));

function array_1st_element($my_array) {
    // list($k) = array_keys($my_array);
    // $result  = array($k => $my_array[$k]);
    // unset($my_array[$k]);
    // return $result;

    // OR
    return array_slice($my_array, 0, 1, true);
}
?>