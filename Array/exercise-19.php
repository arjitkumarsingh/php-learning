<?php
/*
19. Write a PHP script to print "second" and "Red" from the following array.
Sample Data :
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
*/

$color = array("color" => array("a" => "Red", "b" => "Green", "c" => "White"), "numbers" => array(1, 2, 3, 4, 5, 6), "holes" => array("First", 5 => "Second", "Third"));

echo $color['color']['a'] . "<br>";
echo $color['holes'][5];
?>