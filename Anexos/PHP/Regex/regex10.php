<?php

// the string to match against
$string = 'The cat sat on the mat';

// match the beginning of the string
echo preg_match("/^The/", $string); // returns 1

// match the end of the string
echo preg_match("/mat\z/", $string); // returns 1

// match anywhere in the string
echo preg_match("/dog/", $string); // returns 0 as no match was found for dog.
?>
