<?php

require_once 'PaymentProfile.php';
require_once 'Customer.php';
require_once 'Transaction.php';


$transaction = new Transaction(5, 'Test');

//$profileId = null;
//
//if($customer = $transaction->getCustomer()) {
//    if($paymentProfile = $customer->getPaymentProfile()) {
//        $profileId = $paymentProfile->id;
//    }
//}
//
//echo $profileId;


echo $transaction->getCustomer()?->setPaymentProfile(createProfile())?->id;



//declare(strict_types=1);
//require_once 'Transaction.php';
//
////Classes and Objects
//
//$transaction = (new Transaction(100, 'Transaction 1'))
//    -> addTax(8)
//    -> applyDiscount( 10);
//
//
////$transaction2 = (new Transaction(200, 'Transaction 2'))
////    -> addTax(8)
////    -> applyDiscount( 15);
////
//
//
//$amount = $transaction->getAmount();
//
//exit;
//
//var_dump($amount);



//$str = '{"a":1,"b":2,"c":3}';
//
//$arr = json_decode($str);
//
//var_dump($arr->c);


//$obj = new \stdClass();
//$obj->a = 1;
//$obj->b = 2;
//
//var_dump($obj);

//
//$arr = [1, 2, 3];
//$obj = (object) $arr;
//var_dump($obj->{0});

//$obj = (object) 1;
//var_dump($obj->scalar);

//done