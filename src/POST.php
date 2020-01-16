<?php
namespace Treole;

class POST{

    public static function HOST(){

        return $_POST;

    }

    public static function VAL($key){

        return isset(self::HOST()[$key]) ? self::HOST()[$key] : null;

    }

}