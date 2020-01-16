<?php
namespace Treole;

class GET{

    public static function HOST(){

        return $_GET;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}