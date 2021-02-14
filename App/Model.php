<?php

namespace App;

use App\Db;

abstract class Model 
{
    abstract public function getModelName();

    public function delete():void
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = ?';
        $db = new Db();
        $db->executeSql($sql,[$this->id]);
    }

    public function insert():void
    {
        $schema = get_class_vars(static::class);
        $col = [];
        $data = [];

        foreach ($schema as $key => $val)
        {
            if ('id' == $key){
                continue;
            }
            $col[] = $key;
            $data[':' . $key] = $this->$key; 
        }

        $sql = 'INSERT INTO ' . static::TABLE . 
                '('. implode(', ',$col) . ')' . 
                ' VALUES ('. implode(',',array_keys($data)) . ')';

        $db = new Db();
        $db->executeSql($sql,$data);
        $this->id = $db->getLastId(); 
    }

    public static function findAll(int $limit = 0):array
    {
        $limitquery = ($limit > 0) ? ' LIMIT '. $limit : '';
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . $limitquery;
        return $db->query($sql, [], static::class); 
    }

    public static function findById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = ?';
        $res = $db->query($sql, [$id], static::class);

        return $res[0] ?? false;
    }
}