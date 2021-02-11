<?php

namespace App\Models;

use App\Model;

class User extends Model
{

    public const TABLE = 'users';
    public const SCHEMA = ['id','name','email'];

    public $name;
    public $email;

    public function getModelName(){
        return 'Юзер';
    }

}