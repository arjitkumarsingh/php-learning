<?php
/*
7. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5
*/

$original = [1, 2, 3, 4, 5];

echo "Original array :<br>";
foreach ($original as $value) {
    echo "$value ";
}

array_splice($original, 3, 0, "$");

echo "<br>After inserting '$' the array is :<br>";
foreach($original as $value) {
    echo "$value ";
}
?>