<?php
// 27. Write a PHP function to generate a random password (contains uppercase, lowercase, numeric and other) using shuffle() function.

function generatePassword($upper = 4, $lower = 4, $numeric = 4, $other = 4) { 
    
    $content = Array(); 
    $passWord = '';

    //Create contents of the password 
    for ($i = 0; $i < $upper; $i++) { 
        $content[] = chr(rand(65, 90)); 
    } 
    for ($i = 0; $i < $lower; $i++) { 
        $content[] = chr(rand(97, 122)); 
    } 
    for ($i = 0; $i < $numeric; $i++) { 
        $content[] = chr(rand(48, 57)); 
    } 
    for ($i = 0; $i < $other; $i++) { 
        $content[] = chr(rand(33, 47)); 
    } 

    //using shuffle() to shuffle the order
    shuffle($content); 

    //Final password string 
    foreach ($content as $char) { 
        $passWord .= $char; 
    } 
    return $passWord; 
} 
echo "\n"."Generated Password : ".generatePassword();
?>
