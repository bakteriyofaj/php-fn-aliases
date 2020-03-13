<?php

namespace BakteriyoFaj\PhpFnAliases;

class PhpMethodCaller
{
    protected static $cache = [];    

    public static function toArray()
    {
        $class = get_called_class();
        if (!isset(static::$cache[$class])) {
            $reflection            = new \ReflectionClass($class);
            static::$cache[$class] = $reflection->getConstants();
        }
        return static::$cache[$class];
    }

    public static function isValidKey($key)
    {
        $array = static::toArray();
        return isset($array[$key]) || array_key_exists($key, $array);
    }

    public static function getValue($key)
    {
        $array = static::toArray();
        return $array[$key];
    }

    public static function __callStatic($name, $arguments)
    {
        if(static::isValidKey($name)){
            return call_user_func_array(static::getValue($name),$arguments);
        }
    }
}