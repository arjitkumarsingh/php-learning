<?php
// 33. Write a PHP function to search a specified value within the values of an associinive array.

$exercises = array("part1" => "PHP array", "part2" => "PHP String", "part3" => "PHP Math");
array_walk($exercises, "searchValue", "php");

function searchValue($value, $key, $word) {
    $value = strtolower($value);
    $word = strtolower($word);
    // if (strcasecmp($value, $word) == 0) {
    if (str_contains($value, $word)) {
        echo "$word is found in the $key key<br>";
    } else {
        echo "$word not found in the $key key<br>";
    }
}
?>