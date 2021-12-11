<?php

// Array bidimensional
$clients = [
    [1, 'José', 11],
    [2, 'Maria', 21]
];

/*
// Semelhante a

$clients = array(
    array(1, 'José', 11),
    array(2, 'Maria', 21)
];

*/
print '<table border="1">
<tr><td><b>Código</td><td><b>Nome</td><td><b>Idade</td></tr>';
foreach ($clients as $client){
    print '<tr>';
    foreach($client as $element){
        print '<td>'.$element.'</td>';
    }
}
print '</tr></table>';

$cars = array(
    "Urus" => array(
            "type"=>"SUV", 
            "brand"=>"Lamborghini"
        ),
    "Cayenne" => array(
            "type"=>"SUV", 
            "brand"=>"Porsche"
        ),
    "Bentayga" => array(
            "type"=>"SUV", 
            "brand"=>"Bentley"
        ),
);

$size = count($lamborghinis);

// array keys
$keys = arra_keys($cars);

// using the for loop
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i]. "\n";
    foreach($cars[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "\n";
    }
    echo "\n";
}

function display_multi_level_array($array) {
  foreach($array as $key => $value){
    if(is_array($value)) {
       display_multi_level_array($value);
       continue;
    }

    echo $key." ".$value."<br>";
  } 
}

display_multi_level_array($documents);


