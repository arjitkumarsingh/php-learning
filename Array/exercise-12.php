<?php
/*
12. Write a PHP function to change the following array's all values to upper or lower case.
Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output :
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
*/

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

array_walk($color, "change_case", "lower");
echo "Values are in lower case.<br>";
print_r($color);

array_walk($color, "change_case", "upper");
echo "<br>Values are in upper case.<br>";
print_r($color);

function change_case(&$value, $key, $case)
{
    if (strcmp($case, "upper") === 0) {
        $value = strtoupper($value);
    } elseif (strcmp($case, "lower") === 0) {
        $value = strtolower($value);
    }
}
?>