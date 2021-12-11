<?php

// Versão com array()

$frutas = array(       
    // Brasil will act as key 
    "Brasil" => array(           
        // Subject and marks are  
        // the key value pair 
        'Banana' => 170, 
        'Manga' => 145, 
        'Laranja' => array(
            'prata' => 34,
            'rosa' => array(
                'grande' => 50,
                'pequena' => array(
                    'amarela' => 10,
                    'verde' => 20,
                ),
            ),
        )
    )
);

print $frutas['Brasil']['Laranja']['rosa']['pequena']['amarela'];
