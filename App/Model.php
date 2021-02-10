<?php

namespace App;

use App\Db;

abstract class Model 
{
    public $id;

    abstract public function getModelName();

    public static function insertRow($data=[]):bool
    {
        
        $size = count($data);

        if ($size === 0) {
            return false;
        }
        
        $db = new Db();
        $val = '';
        for ($i=1; $i<=$size; $i++) $val .= ', ?';
        $sql = 'INSERT INTO ' . static::TABLE . ' VALUES (0' . $val . ')';
        $db->executeSql($sql, $data);
        return true;
    }

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = ?';
        $res = $db->query($sql, [$id], static::class);
        
        if (!empty($res)){
            return $res;
        };
        
        return false;
    }
}