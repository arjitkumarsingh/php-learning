<?php
// 53. Write a PHP script to delete a specific value from an array using array_filter() function.

$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
$delete = "red";

$filtered_array = array_filter($colors, function ($val) use ($delete) {
    return strcasecmp($val, $delete);
});

print_r($colors);
echo "<br>";
print_r($filtered_array);
?>