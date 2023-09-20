<?php
/*
10. Write a PHP script to replace the first 'the' of the following string with 'That'.
Sample date : 'the quick brown fox jumps over the lazy dog.'
Expected Result : That quick brown fox jumps over the lazy dog.
*/

$data = "the quick brown fox jumps over the lazy dog.";
$replace = "the";
$replacement = "That";

$index =  strpos($data, $replace);
echo substr_replace($data, $replacement, $index, strlen($replace));

//  OR
echo "<br>";

echo preg_replace("/the/", "That", $data, 1);
?>