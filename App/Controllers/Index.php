<?php

namespace App\Controllers;

use App\Models\Article;
use App\Controller;

class Index extends Controller
{
    protected function handle()
    {
        $lim = (!empty($_GET['out'])) ? (int) $_GET['out'] : $lim = 0;        
        $dir = \App\Config::getDir();
        $temp = $dir['template'] . 'index.tpl.php';

        $this->view->news = Article::findAll($lim);
        $this->view->display($temp);
    }
}