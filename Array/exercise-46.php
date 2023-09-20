<?php
// 46. Write a PHP function to check whether all array values are strings or not.

$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MySQL');

var_dump(isStrings($arr1));
var_dump(isStrings($arr2));

// function isStrings($arr) {
//     foreach ($arr as $val) {
//         if (!is_string($val)) {
//             return false;
//             echo "return";
//         }
//     }
//     return true;
// }

// OR

function isStrings($arr) {
    return array_sum(array_map("is_string", $arr)) == count($arr);
}
?>