<?php
/*
1. Write a PHP script to : -
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase.
*/

$string = "the quick brown fox jumps over the lazy dog.<br>";

echo $string . "<br><br>";
echo strtoupper($string);
echo strtolower($string);
echo ucfirst($string);
echo ucwords($string);
?>