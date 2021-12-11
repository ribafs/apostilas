<?php

  /*** create an array ***/
  $animals = array(
        'ernie'=>'dingo',
        'wally'=>'wombat',
        'rat bag'=>'Steve Irwin',
        'playto'=>'platypus',
        'marty'=>'emu'
        );

 /*** Adicionar elemento - push new members onto the array ***/
 array_push( $animals, 'wallaby', 'stingray' );

 /*** loop over the array ***/
 foreach( $animals as $key=>$animal )
 {
        echo $key.' - '.$animal.'<br />';
 }
