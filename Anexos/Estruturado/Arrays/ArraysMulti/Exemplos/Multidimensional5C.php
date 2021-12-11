<?php

// Usando nomems genéricos

$array = [       
    "array1" => [           
        // Subject and marks are  
        // the key value pair 
        'chave1' => 'valor1', 
        'chave2' => 'valor2',
        'array2' => [
            'chave1' => 'valor1',
            'array3' => [
                'chave1' => 'valor1',
                'array4' => [
                    'chave1' => 'valor1',
                    'chave2' => 'valor2'
                ]
            ]
        ]
    ]
];

print $array['array1']['array2']['array3']['array4']['chave2'];


