<?php
/*
24. Write a PHP script to select first 5 words from the following string.
Sample String : 'The quick brown fox jumps over the lazy dog'
Expected Output : 'The quick brown fox jumps'
*/

$data = "The quick brown fox jumps over the lazy dog";

echo implode(" ", array_slice(str_word_count($data, 1), 0, 5));

//  OR
echo "<br>";

echo implode(" ", array_slice(explode(" ", $data), 0, 5));
?>