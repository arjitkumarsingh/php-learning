<?php
// 41. Write a PHP program to identify the email addresses which are not unique.

$test_array = array();
$test_array[1]    = 'xyz@example.com';
$test_array[2]    = 'dse@example.com';
$test_array[3]    = 'xyz@example.com';
$test_array[4]    = 'mno@example.com';

echo "<pre>";
print_r(identifyEmail($test_array));
echo "</pre>";

function identifyEmail($arr) {
    $same = [];
    $old_key = null;
    $old_value = null;
    natcasesort($arr);
    foreach ($arr as $key => $value) {
        if ($old_value == $value) {
            $same[$old_key] = $old_value;
            $same[$key] = $value;
        } else {
            $old_key = $key;
            $old_value = $value;
        }
    }
    return $same;
}
?>