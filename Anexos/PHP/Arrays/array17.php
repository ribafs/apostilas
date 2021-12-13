<?php

 /*** create a multi dimensional array ***/
 $cart = array(
        array('item_id'=>12, 'item_name'=>'book', 'item_price'=>44),
        array('item_id'=>23, 'item_name'=>'book', 'item_price'=>23.33),
        array('item_id'=>11, 'item_name'=>'book', 'item_price'=>32.40),
        );

 /*** loop over the array ***/
 foreach( $cart as $item )
 {
        echo $item['item_id'].'-'.$item['item_name'].'-'.$item['item_price'].'<br />';
 }
