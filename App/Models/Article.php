<?php

namespace App\Models;

use App\Model;

class Article extends Model
{

    public const TABLE = 'news';

    public $title;
    public $content;

    public const SCHEMA = ['id','title','content'];


    public function getSchema()
    {
        return $this->schema;
    }

    public function getModelName(){
        return 'Новость';
    }

}