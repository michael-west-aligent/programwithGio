<?php

//use App\DB;
//use App\PaymentGateway\Paddle\Transaction;

use App\Toaster;
require __DIR__ . '/../vendor/autoload.php';


$toaster = new Toaster();

$toaster->addSlice('bread');
$toaster->toast();

//$transaction = new Transaction( 25);

/** ENCAPSULATION  */
//$reflectionProperty = new reflectionProperty(Transaction::class, 'amount');
//
//$reflectionProperty->setAccessible(true);
//
//$reflectionProperty->setValue($transaction, 125);
//var_dump($reflectionProperty->getValue($transaction));
//
//
//$transaction->process();