<?php
/*
5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white
*/

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo array_shift($color);
// echo reset($color);
?>