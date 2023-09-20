<?php
/*
11. Write a PHP script to find the first character that is different between two strings.
String1 : 'football'
String2 : 'footboll'
Expected Result : First difference between two strings at position 5: "a" vs "o"
*/

$str1 = "football";
$str2 = "footboll";

$pos = strspn($str1, $str2);
echo sprintf("First difference between two strings at position %u: \"%s\" vs \"%s\"", $pos, $str1[$pos], $str2[$pos]);
?>