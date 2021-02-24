<?php

namespace App\Controllers;

use App\Models\Article;
use App\Controller;

class Index extends Controller
{
    protected function handle():void
    {
        $lim = (!empty($_GET['out'])) ? (int) $_GET['out'] : $lim = 0;        
        $dir = \App\Config::getDir();
        $temp = $dir['template'] . 'index.tpl.php';

        $this->view->news = Article::findAll($lim);
        $this->view->categories = \App\Models\Category::findAll();
        $this->view->display($temp);
    }
}