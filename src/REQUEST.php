<?php
namespace Treole;

class REQUEST{

    public static function HOST(){

        return $_REQUEST;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}