<?php

namespace App;

class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id =random_int(10000, 9999999);
    }
}

//use App\Exception\MissingBillingInfoException;
//
//class Invoice
//
//{
//    public function __construct(public Customer $customer)
//    {
//    }
//
//
//    public function process(float $amount): void
//    {
//
//        if ($amount <= 0) {
//            throw new \InvalidArgumentException('Invalid invoice amount');
//        }
//
//        if(empty($this->customer->getBillingInfo())){
//
//            throw new MissingBillingInfoException('Missing billing information');
//        }
//        echo 'Processing $' . $amount . 'i nvoice -';
//
//        sleep(1);
//
//        echo 'OK' . PHP_EOL;
//    }
//}
//
//








//{
//    private string $id;
//
//    public function __construct()
//    {
//        $this->id = uniqid('invoice');
//
//        var_dump('__construct');
//    }
//
//    public function __clone(): void
//    {
//        $this->id = uniqid('invoice');
//        var_dump('__clone');
//    }
//
////    public static function create(): static
////    {
////        return new static();
////    }
//}