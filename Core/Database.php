<?php
namespace Core;

use PDO;
use PDOException;

class Database
{
    private static $pdo;

    public static function getConnection()
    {
        if (!self::$pdo) {
            try {
                $dbFile = __DIR__ . '/../config/local.db';
                self::$pdo = new PDO('sqlite:' . $dbFile);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error al conectar a la base de datos: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
