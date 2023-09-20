<?php
// 32. Write a PHP program to get the extension of a file.

$file = 'example.txt';

$strArr = explode(".", $file);

// rsort($strArr);
// echo $strArr[0];

echo end($strArr);
?>