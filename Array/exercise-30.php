<?php
// 30. Write a PHP program to create a letter range with arbitrary length.

print_r(getRangeOfLetters(7));

function getRangeOfLetters($length) {
    $letters = range("A", "Z");
    $letter_range = "";
    for ($i = 0; $i < $length; $i++) {
        $letter_range .= $letters[$i] . " ";
    }
    $letter_range = rtrim($letter_range);
    return explode(" ", $letter_range);
}
?>