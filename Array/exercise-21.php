<?php
// 21. Write a PHP function to sort subnets.

$subnet_list = array('192.169.12', '192.167.11', '192.169.14', '192.168.13', '192.167.12', '122.169.15', '192.167.16');

usort($subnet_list, "sortSubnet");

function sortSubnet($a, $b)
{
    $arrA = explode(".", $a);
    $arrB = explode(".", $b);

    foreach (range(0, 2) as $i) {
        if ($arrA[$i] < $arrB[$i]) {
            return -1;
        }
        if ($arrA[$i] > $arrB[$i]) {
            return 1;
        }
        /* if i uncomment the below return statement then my resulting array is changing.
        i'm not getting why it is changing. If i'm corrrect then returning 0 means no change in order. */
        // return 0;
    }
}

echo "<pre>";
print_r($subnet_list);
echo "</pre>";
?>