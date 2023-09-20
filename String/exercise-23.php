<?php
/*
23. Write a PHP script to replace multiple characters from the following string.
Sample String : '\"\1+2/3*2:2-3/4*3'
Expected Output : '1 2 3 2 2 3 4 3'
*/

$data = '\"\1+2/3*2:2-3/4*3';

echo trim($data, "\\\"+/*:-") . "<br>";
echo trim($data, '\+\"/*:-') . "<br>";

echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $data) . "<br>";

echo str_replace(str_split('\"+/*:-'), " ", $data) . "<br>";
echo str_replace(str_split("\\\"+/*:-"), " ", $data) . "<br>";
?>