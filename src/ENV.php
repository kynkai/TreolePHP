<?php
namespace Treole;

class ENV{

    public static function HOST(){

        return $_ENV;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}