<?php


function pre ($s){
    echo '<pre>';
    var_dump($s);
    echo '</pre>';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

//$article = new \App\Models\Article();
$data = \App\Models\User::findAll();

//$data = \App\Models\User::findAll();

pre($data);