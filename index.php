<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$lim = (!empty($_GET['out'])) ? (int) $_GET['out'] : $lim = 0;

$dir = \App\Config::getDir();

$view = new \App\View;

$view->news = \App\Models\Article::findAll($lim);

$temp = __DIR__ . DIRECTORY_SEPARATOR . $dir['template'] . 'index.tpl.php';

$view->display($temp);