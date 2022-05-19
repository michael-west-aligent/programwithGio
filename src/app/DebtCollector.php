<?php

namespace App;

interface DebtCollector
{
    /** All methods declared within in interface must be public */
    public function collect(float $owedAmount): float;
}