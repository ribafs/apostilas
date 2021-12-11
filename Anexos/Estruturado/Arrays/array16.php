<?php

  /*** create an array ***/
  $animals = array(
        'ernie'=>'dingo',
        'wally'=>'wombat',
        'rat bag'=>'Steve Irwin',
        'playto'=>'platypus',
        'marty'=>'emu'
        );

 /*** delete an array element ***/
 unset( $animals['rat bag'] );

 /*** loop over the array ***/
 foreach( $animals as $key=>$animal )
 {
        echo $key.' - '.$animal.'<br />';
 }
