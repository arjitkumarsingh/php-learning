<?php
/*
9. Write a PHP script to generate simple random password [do not use rand() function] from a given string.
Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Note : Password length may be 6, 7, 8 etc.
*/

$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

echo substr(str_shuffle($data), 0, 5);
?>