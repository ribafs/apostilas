<?php

 /*** create an array ***/
 $animals = array( 'dingo', 'wombat', 'Steve Irwin', 'playpus', 'emu' );

 /*** get the size of the array ***/
 $size = sizeof( $animals );

 /*** loop over the array ***/
 for( $i=0; $i<$size; $i++ )
 {
        echo $animals[$i].'<br />';
 }
