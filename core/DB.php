<?php

declare(strict_types=1);

namespace Core;

use PDO;
use PDOException;

class DB
{
    private static ?PDO $pdo = null;

    public static function connect(string $dsn, string $username = '', string $password = '', array $options = []): void
    {
        try {
            self::$pdo = new PDO($dsn, $username, $password, $options);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function query(string $sql, array $params = [])
    {
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
} 