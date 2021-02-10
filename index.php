<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$article = \App\Models\Article::findById(2);
$data = \App\Models\Article::findAll();

$data = \App\Models\Article::insertRow(['Новость 4','Текст новости 4']);

//$data = \App\Models\Article::findAll();

pre($data);