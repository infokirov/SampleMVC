<?php

    function __autoload ($class){
        require __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';       
    }

    $dir = (include __DIR__ . '/config.php')['dir'];