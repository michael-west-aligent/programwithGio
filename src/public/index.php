<?php

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction( 25);

/** ENCAPSULATION  */
//$reflectionProperty = new reflectionProperty(Transaction::class, 'amount');
//
//$reflectionProperty->setAccessible(true);
//
//$reflectionProperty->setValue($transaction, 125);
//var_dump($reflectionProperty->getValue($transaction));


$transaction->process();