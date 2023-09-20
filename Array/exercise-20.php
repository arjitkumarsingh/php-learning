<?php
// 20. Write a PHP function to sort an array according to another array acting as a priority list.

$order = [1, 3, 4, 2];
$arr = [2, 1, 3, 4, 2, 1, 2];

usort($arr, "sortOnOrder");

echo "<pre>";
print_r($arr);
echo "</pre>";

function sortOnOrder($a, $b) {
    global $order;
    foreach ($order as $value) {
        if ($a === $value) {
            return 0;
        }
        if ($b === $value) {
            return 1;
        }
    }
}
?>