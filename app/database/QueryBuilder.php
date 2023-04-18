<?php

class QueryBuilder
{
    private static $pdo;

    public static function make(PDO $pdo)
    {
        self::$pdo = $pdo;
    }

    public static function get(string $table)
    {
        try {
            $query = self::$pdo->prepare("SELECT * FROM {$table}");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // Handle the error here, e.g. log it or throw a custom exception
            throw new Exception('Query error: ' . $e->getMessage());
        }
    }

    public static function insert($table, $data){
        $keys = implode(',',array_keys($data));
        $symbol = str_repeat('?,',count($data)-1) .'?';
        $query = "INSERT INTO $table ({$keys}) VALUES ({$symbol})";
        self::$pdo->prepare($query)->execute(array_values($data));
    }
    public static function update($data,$value,$operator = '=',$column = 'id'){
        $keys= implode('=?',array_keys($data)) . "=?";
        $query = "UPDATE tasks SET descrition=? , completed=? WHERE {$column} {$operator} {$value} ";
        self::$pdo->prepare($query);
    }
}
