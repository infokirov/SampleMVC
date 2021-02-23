<?php

namespace App\Models;

use App\Model;

class User extends Model
{

    public const TABLE = 'users';
    
    public $name;
    public $email;
    public $login;
    public $password;
    public $role;

    public function getModelName():string
    {
        return 'Пользователи';
    }

}