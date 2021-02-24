<?php

namespace App\Models;

use App\Model;

class Category extends Model
{

    public const TABLE = 'category';
    
    public $cat_name;
    public $image;

    public function getModelName():string
    {
        return 'Категории';
    }

}