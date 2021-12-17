<?php
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// echo our string
preg_match("/[^b]/", $string, $matches);

// loop through the matches with foreach
foreach($matches as $key=>$value)
        {
        echo $key.' -> '.$value; // 0 -> a
        }
?> 
