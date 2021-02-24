<?php

require __DIR__ . DIRECTORY_SEPARATOR . 'App/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$parts = explode(DIRECTORY_SEPARATOR,$uri);

$ctrl = $parts[1] ? ucfirst($parts[1]) : 'Index';
$class = '\App\Controllers\\' . $ctrl;

$ctrl = new $class;
$ctrl();