<?php

namespace App\Controllers;

use App\Controller;

class Category extends Controller
{

    protected function access():bool
    {
        //return isset($_GET['name']);
        return true;
    }

    protected function handle():void
    {
        $dir = \App\Config::getDir();
           
        if (!empty($_GET['id'])){
            $id = (int) $_GET['id'];
            $this->view->news = \App\Models\Article::findByCategory($id);
            $temp = $dir['template'] . 'index.tpl.php'; 
        } else {
            $temp = $dir['template'] . 'category.tpl.php';
            $this->view->categories = \App\Models\Category::findAll();
        }
       
        $this->view->display($temp);
    }
}