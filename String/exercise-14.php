<?php
/*
14. Write a PHP script to print the next character of a specific character.
Sample character : 'a'
Expected Output : 'b'

Sample character : 'z'
Expected Output : 'a'
*/

// $cha = "x";
// if ($cha == "z") {
//     $cha = "a";
// } elseif ($cha == "Z") {
//     $cha = "A";
// } else {
//     ++$cha;
// }
// echo $cha . "<br>";

// //  OR

// switch ($cha) {
//     case 'z':
//         $cha = "a";
//         break;
//     case 'Z':
//         $cha = "A";
//         break;
//     default:
//         ++$cha;
//         break;
// }
// echo $cha . "<br>";

$cha = "a";
$next_cha = ++$cha;
echo $next_cha;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) {
    $next_cha = $next_cha[0];
}
echo $next_cha . "\n";
?>