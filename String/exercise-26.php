<?php
/*
26. Write a PHP script to print letters from 'a' to 'z'.
Expected Result : abcdefghijklmnopqrstuvwxyz
*/

$x = "a";
while ($x !="aa") {
    echo $x++;
}

//  OR
echo "<br>";

for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>