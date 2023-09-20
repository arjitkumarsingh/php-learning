<?php
// 26. Write a PHP function to shuffle an associative array, preserving key, value pairs.

$colors = array("color1" => "Red", "color2" => "Green", "color3" => "Yellow");

function shuffleArrays($arr) {
    $keys = array_keys($arr);
    shuffle($arr);
    return array_combine($keys, $arr);
}

print_r(shuffleArrays($colors));
?>