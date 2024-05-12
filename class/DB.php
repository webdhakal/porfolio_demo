<?php

class DB
{
    public static $pdo;

    public static function init()
    {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }

    public static function create($sql)
    {
        self::init();
        self::$pdo->exec($sql);
    }
}
