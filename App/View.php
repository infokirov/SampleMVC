<?php

namespace App;

abstract class View 
{

    public static function objOut($obj, $out) 
    {
        var_dump($obj);
        return $out.$obj;

    }
}