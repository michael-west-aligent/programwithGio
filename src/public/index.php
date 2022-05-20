<?php

use App\Invoice;
use App\Customer;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(new Customer());


try {
    $invoice->process(-25);
} catch(\App\Exception\MissingBillingInfoException) {
    echo 'Some error ' . PHP_EOL;
} catch(\InvalidArgumentException) {
    echo 'Invalid argument exception' . PHP_EOL;
}