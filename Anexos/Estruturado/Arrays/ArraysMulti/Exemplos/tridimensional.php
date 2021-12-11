<?php

// Multidimensional array é formado por arrays dentro de outros arrays. Veja abaixo

$array3d = array( 
    array( 
        array(1, 2), 
        array(3, 4), 
    ), 
    array( 
        array(5, 6), 
        array(7, 8), 
    ), 
); 

print '<pre>';
print_r($array3d); 
print '</pre>';

// A sintaxe abaixo é utilizada nos frameworks PHP atualmente e é suportada para PHP 5.4 ou superior

$array3d = [
    [
        [1, 2], 
        [3, 4], 
    ], 
    [ 
        [5, 6], 
        [7, 8], 
    ], 
]; 
      
print '<pre>';
print_r($array3d); 
print '</pre>';

// Exemplo prático

// Produção de frutas em toneladas nos países Brasil, Índia e Japão no ano de 2018: banana, manga e laranja
$frutas = [       
    // Brasil will act as key 
    "Brasil" => [           
        // Subject and marks are  
        // the key value pair 
        'Banana' => 170, 
        'Manga' => 145, 
        'Laranja' => 120, 
    ],
          
    // Índia will act as key 
    "Índia" => [           
        // Subject and marks are  
        // the key value pair 
        'Banana' => 78, 
        'Manga' => 98, 
        'Laranja' => 46, 
    ], 
      
    // Japão will act as key 
    "Japão" => [           
        // Subject and marks are 
        // the key value pair 
        'Banana' => 88, 
        'Manga' => 46, 
        'Laranja' => 99, 
    ], 
]; 
       
// Accessing array elements using for each loop 
print '<h1>Produção de frutas em 2018</h1>';
$index = 0;
print '<table>';
foreach($frutas as $fruta) { 
    if ($index == 0){
        echo '<tr><td>Brasil: Banana - '.$fruta['Banana']. "</td><td>Manga - ".$fruta['Manga']."</td><td>Laranja - ".$fruta['Laranja']."</td></tr>";  
    }
    if ($index == 1){
        echo '<tr><td>Índia: Banana - '.$fruta['Banana']. "</td><td>Manga - ".$fruta['Manga']."</td><td>Laranja - ".$fruta['Laranja']."</td></tr>";  
    }
    if ($index == 2){
        echo '<tr><td>Japão: Banana - '.$fruta['Banana']. "</td><td>Manga - ".$fruta['Manga']."</td><td>Laranja - ".$fruta['Laranja']."</td></tr>";  
    }

    $index = $index +1;
} 
print '</table>';

// Adaptado do exemplo em inglês - https://www.geeksforgeeks.org/multidimensional-arrays-in-php/

