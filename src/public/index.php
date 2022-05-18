<?php

use App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(\App\Enums\Status::PAID);

var_dump($transaction);

