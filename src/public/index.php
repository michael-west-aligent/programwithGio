<?php

use App\AnInvoice;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice1 = new AnInvoice(25, 'My invoice 1');
$invoice2 = new AnInvoice(100, 'My invoice 2');

$invoice3 = $invoice1;

echo 'invoice 1 == invoice 3' . PHP_EOL;
var_dump($invoice1 == $invoice3);

echo 'invoice1 === invoice 2' . PHP_EOL;
var_dump($invoice1 === $invoice3q);