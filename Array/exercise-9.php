<?php
/*
9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85,
*/

// $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];

echo "Average Temprature is : " . array_sum($temp) / count($temp) . "<br>";

sort($temp);
$lowest_temperatures = array_slice(array_unique($temp), 0, 5);
echo "List of 5 lowest temperatures : ";
foreach ($lowest_temperatures as $value) {
    echo "$value, ";
}

rsort($temp);
$highest_temperatures = array_slice(array_unique($temp), 0, 5);
echo "<br>List of 5 highest temperatures : ";
foreach ($highest_temperatures as $value) {
    echo "$value, ";
}
?>