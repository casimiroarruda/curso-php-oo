<?php
namespace Curso\Service;

abstract class Registry
{
    protected static $index = array();

    public static function register($key, $value)
    {
        self::$index[$key] = $value;
    }

    public static function get($key){
        return self::$index[$key];
    }
}