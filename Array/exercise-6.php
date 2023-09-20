<?php
/*
6. Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown
*/

$json = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
    }
}';

$jsonObj = json_decode($json, true);

array_walk_recursive($jsonObj, "display");
function display($value, $key) {
    echo "$key : $value<br>";
}
?>