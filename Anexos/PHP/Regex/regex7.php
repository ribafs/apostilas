<?php

// create a string
$string = '12345678';

// look for a match
echo preg_match("/1234-?5678/", $string, $matches);

?> 
