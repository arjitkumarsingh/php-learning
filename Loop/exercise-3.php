<?php
/*
3. Create a script to construct the following pattern, using nested for loop.

*  
* *  
* * *  
* * * *  
* * * * *   

*/

for ($i = 1; $i <= 5; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>