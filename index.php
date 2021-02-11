<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$article = new \App\Models\Article;
$user = new \App\Models\User;

