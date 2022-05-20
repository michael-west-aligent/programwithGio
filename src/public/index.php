<?php

use App\AnInvoice;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new \App\Invoice();

$invoice2 = clone $invoice;

//var_dump($invoice, $invoice2, \App\Invoice::create());

var_dump($invoice, $invoice2, $invoice === $invoice2);