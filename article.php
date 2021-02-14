<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$_GET['id'] ? $lim = $_GET['id'] : $lim=0 ;

$news =  \App\Models\Article::findById($lim);
//$user = new \App\Models\User;

include (__DIR__ . DIRECTORY_SEPARATOR . $dir['template'] . 'index.tpl.php');