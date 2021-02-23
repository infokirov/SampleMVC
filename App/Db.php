<?php

namespace App;

use App\Config;

class Db extends Config
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::getDb();

        $this->dbh = new \PDO (
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']
        );
    }

    public function executeSql($sql, $data=[]):bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function getLastId():int
    {
        return $this->dbh->lastInsertId();
    }

    public function query($sql, $data=[], $class):array
    {
       $sth = $this->dbh->prepare($sql);
       $sth->execute($data);
       return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }
}