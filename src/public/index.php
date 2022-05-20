<?php

use App\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

$str = serialize($invoice);

$invoice2 = unserialize($str);

var_dump($invoice, $invoice2, $invoice === $invoice2);

//echo serialize(true) . PHP_EOL;
//echo serialize(1) . PHP_EOL;
//echo serialize(2.5) . PHP_EOL;
//echo serialize('hello') . PHP_EOL;
//echo serialize([1,2,4]) . PHP_EOL;
//echo serialize(['a' => 1, 'b' => 2]) . PHP_EOL;
//
//var_dump(unserialize(serialize(['a' => 1, 'b' => 2])));

//echo serialize($invoice) . PHP_EOL;