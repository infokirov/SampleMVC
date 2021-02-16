<?php

namespace App;

/*
* Pattern Singleton
*/

class Config
{

    private $settings;
    private static $_instance = null;

    protected function __construct()
    {
        $this->settings = (include __DIR__ . '/../config.php');
    }

    protected function __clone()
    {
        // клонирование объекта
    }
    
    static public function getInstance()
    {
        if(is_null(self::$_instance))
            {
                self::$_instance = new self();
            }
        return self::$_instance;
    }

    static public function getDB():array
    {
        $c = self::getInstance();
        $db = $c->settings;
        return $db['db'] ?? [];
    }

    static public function getDir():array
    {
        $c = self::getInstance();
        $dir = $c->settings;
        return $dir['dir'] ?? [];
    }
}