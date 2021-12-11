<?php

  /*** create an array ***/
  $animals = array(
        'ernie'=>'dingo',
        'wally'=>'wombat',
        'rat bag'=>'Steve Irwin',
        'playto'=>'platypus',
        'marty'=>'emu'
        );

 /*** random sort the array ***/
 shuffle( $animals );

 /*** loop over the array ***/
 foreach( $animals as $key=>$animal )
 {
        echo $key.' - '.$animal.'<br />';
 }
