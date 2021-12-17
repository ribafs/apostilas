<?php
// create a string
$string = 'abcefghijklmnopqrstuvwxyz0123456789';

// try to match all characters not within out pattern
preg_match_all("/[^b]/", $string, $matches);

// loop through the matches with foreach
foreach($matches[0] as $value)
        {
        echo $value;
        }
?> 
