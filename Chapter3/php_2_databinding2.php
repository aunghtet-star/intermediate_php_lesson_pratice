<?php
class One
{
    private static $name = "Aung Htet";
    public static function Name()
    {
        return self::$name;
    }
    public static function getName()
    {
        echo static::Name();
    }
}
class Two extends One
{
    private static $name = "Noe Noe";
    public static function Name()
    {
        return self::$name;
    }
}


Two::getName();
