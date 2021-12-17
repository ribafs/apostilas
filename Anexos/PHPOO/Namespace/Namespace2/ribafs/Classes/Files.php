<?php

namespace RibaFS\Classes;

class Files{

    public function fileCountLines($file){
        $line_count = count (file ($file));
        return $line_count;
    }
}

