<?php
// 7. Write a program which will count the "r" characters in the text "w3resource".

$data = "w3resource";
$counter = 0;
for ($i = 0; $i < strlen($data); $i++) {
    if (strcmp("r", $data[$i]) == 0) {
        $counter++;
    }
}
echo $counter;
?>