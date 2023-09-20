<?php
// 52. Write a PHP function to filter a multi-dimensional array. The function will return those items that will match with the specified value.

$colors = array(
    0 => array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black'),
    1 => array('key1' => 'Yellow', 'key2' => 'White', 'key3' => 'Pink')
);

print_r(filterArray($colors, "key3", "Pink"));

function filterArray($arr, $sub_key, $needle) {
    foreach ($arr as $key => $sub_arr) {
        if (strcasecmp(array_search($needle, $sub_arr), $sub_key) == 0) {
            return $arr[$key];
        }
    }
    return "Not Found";
}
?>