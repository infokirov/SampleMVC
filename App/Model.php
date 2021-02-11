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
        
        $schema = static::SCHEMA;
        $prepare = [':id' => 0]; 

        foreach ($schema as $key) {
            foreach ($data as $datakey => $dataval) {
                if ($key === $datakey) { 
                    $prepare[':'.$key] = $dataval; 
                }
            }            
        }

        if (count($prepare) < count($schema)) return false;

        $sql = 'INSERT INTO ' . static::TABLE . '('. implode(', ',$schema) . ')' . ' VALUES (:'. implode(', :',$schema) . ')';

        echo $sql; 
               
        $db = new Db();
        $db->executeSql($sql, $prepare);
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