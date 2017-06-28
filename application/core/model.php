<?php

class Model
{
    public function get_data()
    {
    }

    public static $sqlDatabaseHost = 'localhost';
    public static $sqlDatabaseName = 'budlinia';
    public static $sqlDatabaseUser = 'root';
    public static $sqlDatabasePassword = '';
    public static $pdo;

    public function pdoConnect() {
        try {
            $dsn = 'mysql:host='.self::$sqlDatabaseHost.';dbname='.self::$sqlDatabaseName.';charset=utf8';
            $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            self::$pdo = new PDO($dsn, self::$sqlDatabaseUser, self::$sqlDatabasePassword, $opt);
            self::$pdo->exec("SET NAMES 'utf8'");
            self::$pdo->exec("SET CHARACTER SET utf8");

        } catch (PDOException $e) {
            echo 'db error';
            exit;
        }
    }
}