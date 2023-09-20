<?php
/*
6. Write a PHP script to extract the user name from the following email ID.
Sample String : 'rayy@example.com'
Expected Output : 'rayy'
*/

$email = "rayy@example.com";

echo strstr($email, "@", true);
?>