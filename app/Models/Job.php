<?php

namespace App\Models;

class Job
{
    protected static array $jobs = [
        ['id' => 1, 'title' => 'Director', 'salary' => 50000],
        ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
        ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
    ];

    public static function all(): array
    {
        return self::$jobs;
    }

    public static function find(int $id): ?array
    {
        foreach (self::$jobs as $job) {
            if ($job['id'] === $id) {
                return $job;
            }
        }
        return null;
    }
}
