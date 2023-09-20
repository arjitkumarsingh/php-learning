<?php
/*
3. Write a PHP script to check whether a string contains a specific string?
Sample string : 'The quick brown fox jumps over the lazy dog.'
Check whether the said string contains the string 'jumps'.
*/

$str = "The quick brown fox jumps over the lazy dog.";
$search_word = "jumps";

if (strstr($str, $search_word) !== false) {
    echo "<b>$search_word</b> found";
} else {
    echo "No match found";
}
?>