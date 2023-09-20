<?php
/*
17. Write a PHP script to insert a string at the specified position in a given string.
Original String : 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output : 'The quick brown fox'
*/

$data = "The brown fox";
$insert_key = "quick";
$position = 4;

echo substr_replace($data, $insert_key . " ", 4, 0);
?>