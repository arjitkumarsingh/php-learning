<?php
/*
18. Write a PHP script to get the first word of a sentence.
Original String : 'The quick brown fox'
Expected Output : 'The'
*/

$data = "The quick brown fox";

echo current(explode(" ", $data));
?>