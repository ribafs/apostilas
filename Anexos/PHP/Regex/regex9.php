<?php
// create a string
$string = 'We will replace the word foo';

// substitute the word for and put in bar
$string = preg_replace("/foo/", 'bar', $string);

// echo the new string
echo $string;
?> 
