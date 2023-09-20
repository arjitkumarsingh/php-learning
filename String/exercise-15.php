<?php
/*
15. Write a PHP script to remove a part of a string from the beginning.
Sample string : 'rayy@example.com'
Expected Output : 'example.com'
*/

$data = "rayy@example.com";
print_r(end(explode("@", $data)));
?>