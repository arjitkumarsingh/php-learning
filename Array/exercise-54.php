<?php
// 54. Write a PHP script to remove all white spaces in an array.

$my_array = array(15, null, "  ", -2, NULL, "", " \n", "Red", 54, "\t");

$result = array_filter($my_array, "removeAllWhiteSpaces");
function removeAllWhiteSpaces($val){
    return trim($val);
}

// OR
// $result = array_filter($my_array, "trim");

echo "<pre>";
print_r($my_array);
echo "<br>";
print_r($result);
echo "</pre>";
?>