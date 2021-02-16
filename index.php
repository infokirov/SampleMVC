<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$lim = (!empty($_GET['out'])) ? (int) $_GET['out'] : $lim = 0;

$news =  \App\Models\Article::findAll($lim);

$dir = \App\Config::getDir();

include (__DIR__ . DIRECTORY_SEPARATOR . $dir['template'] . 'index.tpl.php');