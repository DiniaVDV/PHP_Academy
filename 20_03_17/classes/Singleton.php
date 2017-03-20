<?php


class Singleton
{
    private static $instanse;
    private $id;

    public static function getInstance()
    {
        if (!static::$instanse instanceof Singleton) {
            static::$instanse = new Singleton();
        }

        return static::$instanse;
    }

    private function __construct()
    {
        $this->id = random_int(10,1000);
    }

}