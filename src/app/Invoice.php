<?php

namespace App;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice');

        var_dump('__construct');
    }

    public function __clone(): void
    {
        $this->id = uniqid('invoice');
        var_dump('__clone');
    }

//    public static function create(): static
//    {
//        return new static();
//    }
}