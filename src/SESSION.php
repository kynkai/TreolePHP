<?php
namespace Treole;

class SESSION{

    public static function HOST(){

        return $_SESSION;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}