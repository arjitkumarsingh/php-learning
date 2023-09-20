<?php
// 37. Write a PHP script to count the total number of times a specific value appears in an array.

$colors = array("c1" => "Red", "c2" => "Green", "c3" => "Yellow", "c4" => "Red");

$counted_colors = array_count_values($colors);

$word = "Red";
echo "$word colors appears $counted_colors[$word] times";