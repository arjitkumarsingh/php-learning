<?php
// 4. Write a PHP script to convert the value of a PHP variable to string.

$x =  20;
$str = (string) $x;

var_dump($x);
echo "<br>";
var_dump($str);
echo "<br>";

if ($x === $str) {
    echo "They are the same";
} else {
    echo "They are not same";
}
?>