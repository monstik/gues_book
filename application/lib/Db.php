<?php

namespace application\lib;
use PDO;
class Db
{
    protected $db;


    public function __construct()
    {
        $config = require "application/config/db.php";
        $this->db= new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}" ,$config['user'], $config['password']);
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);

        if (!empty($params))
        {
            foreach ($params as $key => $val) {
                if (is_int($val)) {
                    $type = PDO::PARAM_INT;
                } else {
                    $type = PDO::PARAM_STR;
                }
                $stmt->bindValue(':'.$key, $val, $type);
            }

        }
        $stmt->execute();
        return $stmt;
        
    }

    public function row($sql, $params = [])
    {
        $result = $this->query($sql,$params)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function collum($sql, $params =[])
    {
        $result = $this->query($sql,$params)->fetchColumn();
        return$result;
    }

    public function lastInserId()
    {
        return $this->db->lastInsertId();
    }


}