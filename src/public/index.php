<?php

//require_once 'PaymentProfile.php';
//require_once 'Customer.php';
//require_once 'Transaction.php';
//

require_once '../app/PaymentGateway/Stripe/Transaction.php';
require_once '../app/PaymentGateway/Paddle/Transaction.php';
require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
require_once '../app/Notification/Email.php';


//require_once '../../app/PaymentGateway/Stripe/Transaction.php';
//require_once '../../app/PaymentGateway/Paddle/Transaction.php';
//require_once '../../app/PaymentGateway/Paddle/CustomerProfile.php';
//require_once '../../app/Notification/Email.php';

//
//use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};
//use App\PaymentGateway\Stripe\Transaction as StripeTransaction;


use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();
//$stripeTransaction = new StripeTransaction();
//$paddleCustomerProfile = new CustomerProfile();


var_dump($paddleTransaction);

