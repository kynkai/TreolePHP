<?php
namespace Treole;

class COOKIE{

    public static function HOST(){

        return $_COOKIE;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}