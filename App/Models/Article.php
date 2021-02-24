<?php

namespace App\Models;

use App\Model;

class Article extends Model
{

    public const TABLE = 'news';
    
    public $title;
    public $description;
    public $content;
    public $pubdate;
    public $image;
    public $author_id;
    public $cat_id;
    public $count; 

    public function getModelName():string
    {
        return 'Новости';
    }

    public function incCount():string
    {
        (int) $this->count++;
        $this->update();
        return $this->count;
    }

    public function __get($name):string
    {
        if (($name == 'author') && isset($this->author_id)) {
            $author = User::findById($this->author_id);
            $this->$name = $author->name;
        }

        if (($name == 'category') && isset($this->cat_id)) {
            $category = Category::findById($this->cat_id);
            $this->$name = $category->cat_name;
        }

        return $this->$name ?? '';
    }
}