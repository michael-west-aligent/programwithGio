<?php

namespace App;

trait CappuccinoTrait
{
        public function makeCappuccino()
    {
        echo static::class . 'is making cappucinno' . PHP_EOL;
    }

}