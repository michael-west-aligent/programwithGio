<?php

namespace App;

class AnInvoice
{
    public function __construct(public float $amount, public string $description)
    {
    }
}