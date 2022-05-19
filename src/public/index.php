<?php

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction( 25, 'Transaction 1');

//$db = DB::getInstance([]);
//
//$transaction = TransactionFactory::make(25, 'Transaction 1');

$transaction->process();
//
//var_dump($transaction::getCount());

var_dump($transaction->amount);