<?php
// 29. Write a PHP program to generate an array with a range taken from a string.

$test_string = '1-2 18-20 9-11';

function generateArray($strRange) {
    $my_array = array();
    $range_array = explode(" ", $strRange);
    foreach ($range_array as $value) {
        $range_pair = explode("-", $value);
        echo $range_pair;
        exit;
        array_merge($my_array, range($range_pair[0], $range_pair[1]));
        // print_r($my_array);
    }
    // print_r($my_array);
    return $my_array;
}

print_r(generateArray($test_string));

/* Their solution */

// function string_range($str1) 
// {
//  echo preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $str1, $a);
//  print_r($a);
//   $x = array ();
//   foreach ($a[1] as $k => $v) 
//   {
//     $x  = array_merge ($x, range ($v, (empty($a[2][$k])?$v:$a[2][$k])));
//   }
//   return ($x);
// }
// $test_string = '1-2 18-20 9-11';
// string_range($test_string);
// print_r(string_range($test_string));
?>