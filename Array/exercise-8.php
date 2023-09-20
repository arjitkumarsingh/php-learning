<?php
/*
8. Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "ascending order sort by value: <br>";
asort($arr);
foreach ($arr as $key => $val) {
    echo "$key -> $val<br>";
}

echo "<br>ascending order sort by key: <br>";
ksort($arr);
foreach ($arr as $key => $val) {
    echo "$key -> $val<br>";
}
echo "<br>descending order sort by value: <br>";
arsort($arr);
foreach ($arr as $key => $val) {
    echo "$key -> $val<br>";
}
echo "<br>descending order sort by key: <br>";
krsort($arr);
foreach ($arr as $key => $val) {
    echo "$key -> $val<br>";
}