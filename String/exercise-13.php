<?php
/*
13. Write a PHP script to get the filename component of the following path.
Sample path : "https://www.w3resource.com/index.php"
Expected Output : 'index'
*/

$path = "https://www.w3resource.com/index.php";

echo current(explode(".",end(explode("/", $path))));

// OR
echo "<br>";

echo basename($path, ".php");
