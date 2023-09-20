<?php
// 23. Write a PHP program to sort a multi-dimensional array set by a specific key.

$my_array = array();
$my_array[0]['name'] = 'Sana';
$my_array[0]['email'] = 'sana@example.com';
$my_array[0]['phone'] = '111-111-1234';
$my_array[0]['country'] = 'USA';

$my_array[1]['name'] = 'Robin';
$my_array[1]['email'] = 'robin@example.com';
$my_array[1]['phone'] = '222-222-1235';
$my_array[1]['country'] = 'UK';

$my_array[2]['name'] = 'Sofia';
$my_array[2]['email'] = 'sofia@example.com';
$my_array[2]['phone'] = '333-333-1236';
$my_array[2]['country'] = 'India';

array_multisort(array_column($my_array, "name"), SORT_ASC, $my_array);

echo "<pre>";
print_r($my_array);
echo "</pre>";