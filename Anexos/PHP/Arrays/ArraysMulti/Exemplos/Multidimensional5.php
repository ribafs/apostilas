<?php

// A versão abaixo, usando [] é suportada pelo PHP 5.4 ou superior
// Para versão anterior do PHP veja o exemplo Multidimensional5B.php

$frutas = [       
    // Brasil will act as key 
    "Brasil" => [           
        // Subject and marks are  
        // the key value pair 
        'Banana' => 170, 
        'Manga' => 145,
        'Laranja' => [
            'prata' => 34,
            'rosa' => [
                'grande' => 50,
                'pequena' => [
                    'amarela' => 10,
                    'verde' => 20
                ]
            ]
        ]
    ]
];

print $frutas['Brasil']['Laranja']['rosa']['pequena']['amarela'];
