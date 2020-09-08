<?php

namespace app\model;

class Conexao {

    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO("mysql:host=localhost; dbname=pdo;", "ricardo", "admin");
        }
            return self::$instance;
        
    }
}