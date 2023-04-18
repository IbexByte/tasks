<?php

class DBConnection
{
    private static $pdo;

    public static function make($config)
    {
        if (!isset(self::$pdo)) {
            $dsn = $config['dbtype'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'] . ";charset=utf8";
            $username = $config['username'];
            $password = $config['password'];
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

            try {
                self::$pdo = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                throw new Exception('Could not connect to the database');
            }
        }

        return self::$pdo;
    }
}
