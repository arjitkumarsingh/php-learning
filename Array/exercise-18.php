<?php
/*
18. Write a PHP function to floor decimal numbers with precision.
Note: Accept three parameters number, precision, and $separator
Sample Data :
1.155, 2, "."
100.25781, 4, "."
-2.9636, 3, "."

Expected Output :
1.15
100.2578
-2.964
*/

function format($number, $precision, $separator)
{
    $num_array = explode($separator, $number);
    $num_array[1] = substr_replace($num_array[1], $separator, $precision, 0);
    if ($num_array[0] >= 0) {
        $num_array[1] = floor($num_array[1]);
    } else {
        $num_array[1] = ceil($num_array[1]);
    }
    return implode($separator, $num_array);
}

echo format(1.155, 2, ".") . "<br>";
echo format(100.25781, 4, ".") . "<br>";
echo format(-2.9636, 3, ".") . "<br>";
?>