<?php
// 31. Write a PHP program to get the index of the highest value in an associative array.

$x = array('value1' => 3021, 'value2' => 2365, 'value3' => 5215, 'value4' => 5214, 'value5' => 2145);

// $max = max($x);
// foreach ($x as $key => $value) {
//     if ($max === $value) {
//         echo "The index of the highest value in the associative array is: <strong>$key</strong>";
//         break;
//     }
// }

arsort($x);
reset($x);
echo key($x);
?>