<?php

namespace App;

class Coffeemaker
{
    public function makeCoffee()
    {
        echo static::class . 'is making coffee' . PHP_EOL;
    }
}