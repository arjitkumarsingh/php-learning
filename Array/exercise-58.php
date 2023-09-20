<?php
/*
58. Write a PHP script to combine (using one array for keys and another for its values) the following two arrays.
('x', 'y', 'y'), (10, 20, 30)
*/

// $array1 = array('x', 'y', 'y');
// $array2 = array(10, 20, 30);

// echo "<pre/>";
// print_r(createArray($array1, $array2));


// function createArray($keys, $values) {
//     $result = array();
//     foreach ($keys as $i => $k) {
//         $result[$k][] = $values[$i];
//     }
//     array_walk($result, create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
//     return    $result;
// }

function combine_Array($keys, $values)
{
    $result = array();
    foreach ($keys as $i => $k) {
        $result[$k][] = $values[$i];
    }
    array_walk($result, create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
    return    $result;
}
$array1 = array('x', 'y', 'y');
$array2 = array(10, 20, 30);
print_r(combine_Array($array1, $array2));
?>