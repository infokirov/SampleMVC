<?php

namespace App\Controllers;

use App\Models\Article;
use App\Controller;

class Post extends Controller
{

    protected function access():bool
    {
        //return isset($_GET['name']);
        return true;
    }

    protected function handle()
    {
        $lim = (!empty($_GET['id'])) ? (int) $_GET['id'] : $lim = 1;        
        $dir = \App\Config::getDir();
        $temp = $dir['template'] . 'post.tpl.php';        
       
        $this->view->post = Article::findById($lim);
        $this->view->display($temp);
    }
}