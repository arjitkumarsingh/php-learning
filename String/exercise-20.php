<?php
/*
20. Write a PHP script to remove part of a string.
Original String : 'The quick brown fox jumps over the lazy dog'
Remove 'fox' from the above string.
Expected Output : 'The quick brown jumps over the lazy dog'
*/

$data = "The quick brown fox jumps over the lazy dog";
$remove = "fox";

echo str_replace($remove, "", $data);
?>