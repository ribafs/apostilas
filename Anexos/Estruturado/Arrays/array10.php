<?php

 /*** create an associative array ***/
 $animals = array( 
    'dingo'=>'australian',
    'wombat'=>'australian',
    'Steve Irwin'=>'australian',
    'platypus'=>'australian',
    'kiwi'=>'new zealand',
    'emu'=>'australian'
    );

 /*** loop over the array ***/
 foreach ( $animals as $key=>$animal )
 {
        /*** check the value ***/
        if( $animal != 'australian' )
        {
                /*** echo the key ***/
                echo $key;
        }
 }
