<?php
/*
12. Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer science education. It is named after Robert Floyd.
It is defined by filling the rows of the triangle with consecutive numbers, starting with a 1 in the top left corner:
Sample output for n = 5 :
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15

*/

$n = 11;
$count = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $count++ . " &nbsp ";
    }
    echo "<br>";
}
?>