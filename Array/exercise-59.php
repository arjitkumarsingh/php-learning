<?php
/*
59. Write a PHP program to create a range like the following array.
Array
(
[20] => 2
[21] => 3
[22] => 4
[23] => 5
[24] => 6
[25] => 7
)
*/

echo "<pre>";
print_r(array_combine(range(20, 25), range(2, 7)));
echo "</pre>";
?>