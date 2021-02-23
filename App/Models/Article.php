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

    public function getModelName():string
    {
        return 'Новости';
    }

}