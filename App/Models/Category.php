<?php

namespace App\Models;

use App\Model;

class Article extends Model
{

    public const TABLE = 'category';
    
    public $cat_name;

    public function getModelName():string
    {
        return 'Категории';
    }

}