<?php
// 43. Write a PHP script to merge two commas separated lists with unique value only.

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$result = implode(",", array_unique(array_merge(explode(",", $list1), explode(",", $list2))));
echo $result;
?>