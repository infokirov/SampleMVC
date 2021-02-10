<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO (
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']
        );
    }

    public function executeSql($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
    }

    public function query($sql, $data=[], $class)
    {
       $sth = $this->dbh->prepare($sql);
       $sth->execute($data);
       return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
       
       /* $data = $sth->fetchAll();
       $ret = [];
       foreach ($data as $row) {
           $item = new $class;
           foreach ($row as $key => $val) {
               if (is_numeric($key)){
                   continue;
               }
               $item->$key = $val;
           }
           $ret[] = $item;
       }
       return $ret; */
    }
}