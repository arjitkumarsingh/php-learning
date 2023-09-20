<?php
/*
21. Write a PHP script to remove trailing slash from a string.
Original String : 'The quick brown fox jumps over the lazy dog///'
Expected Output : 'The quick brown fox jumps over the lazy dog'
*/

$data = "The quick brown fox jumps over the lazy dog///";
echo rtrim($data, "/");
?>