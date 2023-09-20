<?php
/*
5. Write a program to calculate and print the factorial of a number using a for loop.
The factorial of a number is the product of all integers up to and including that number,
so the factorial of 4 is 4*3*2*1= 24.
*/

$n = 7;
for ($i = $n - 1; $i >= 2; $i--) {
    $n *= $i;
}

echo $n;
?>