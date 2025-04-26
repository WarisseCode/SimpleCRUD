<?php

declare(strict_types=1);

namespace Core;

use Core\DB;

abstract class Model
{
    protected string $table;
    protected array $fillable = [];

    public static function create(array $data)
    {
        $instance = new static();
        $fields = array_intersect_key($data, array_flip($instance->fillable));
        $columns = implode(', ', array_keys($fields));
        $placeholders = implode(', ', array_fill(0, count($fields), '?'));
        $sql = "INSERT INTO {$instance->table} ($columns) VALUES ($placeholders)";
        DB::query($sql, array_values($fields));
    }

    public static function all()
    {
        $instance = new static();
        $sql = "SELECT * FROM {$instance->table}";
        return DB::query($sql)->fetchAll();
    }

    public static function find(int $id)
    {
        $instance = new static();
        $sql = "SELECT * FROM {$instance->table} WHERE id = ?";
        return DB::query($sql, [$id])->fetch();
    }
} 