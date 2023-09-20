<?php
/*
14. Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4.
*/

$arr_str = ["abcd", "abc", "de", "hjjj", "g", "wer"];

$arr_num = array_map("strlen", $arr_str);
echo "The shortest array length is ".min($arr_num)." The longest array length is ".max($arr_num);
?>