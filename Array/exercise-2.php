<?php
/* 2. $color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

    . green
    . red
    . white
*/

$color = ['white', 'green', 'red'];
foreach ($color as $val) {
    echo $val . ", ";
}
sort($color);
echo "<ul>";
foreach ($color as $val) {
    echo "<li>$val</li>";
}
echo "</ul>";
?>