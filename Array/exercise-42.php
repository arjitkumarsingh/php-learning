<?php
// 42. Write a PHP function to find unique values from multidimensional arrays and flatten them in zero depth.

$tmp = array(
    'a' => array(-1, -2, 0, 2, 3),
    'b' => array('c' => array(-1, 0, 2, 0, 3)
    )
);

print_r(array_flat($tmp));

function array_flat($my_array) {
    $flat_array = array();
    $i = 0;
    foreach ($my_array as $v) {
        if (!is_array($v)) {
            $flat_array[] = $v;
            continue;
        }
        $i++;
        $flat_array = array_flat($v, $flat_array, $i);
        $i--;
    }

    if ($i == 0) $flat_array = array_values(array_unique($flat_array));
    return $flat_array;
}
?>