<?php
namespace Treole;

class FILES{

    public static function HOST(){

        return $_FILES;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}