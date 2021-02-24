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

    protected function handle():void
    {

        $dir = \App\Config::getDir();
        
        if (!empty($_GET['id'])) {
            $id = (int) $_GET['id'];
            $this->view->post = Article::findById($id);
            $temp = $dir['template'] . 'post.tpl.php';
        } else {
            $this->view->news = Article::findAll();
            $temp = $dir['template'] . 'index.tpl.php';
        }
       
        $this->view->display($temp);
    }
}