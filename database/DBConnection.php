<?php

class DBConnection
 {
    private static $pdo ;


    public static function make(){
        try {
        self::$pdo = self::$pdo ?  : new PDO('mysql:host=localhost;dbname=tasks;charset=utf8', 'root' , '00001996');
        self::$pdo->exec('set names utf8');
        return self::$pdo ;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
 }

