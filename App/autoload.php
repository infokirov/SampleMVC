<?php

setlocale (LC_ALL, "ru_RU.UTF-8");

    function __autoload ($class){
        require '/home/resident/Project/php' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';       
    }