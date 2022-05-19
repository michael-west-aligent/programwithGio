<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{

    private static int $count = 0;

    public function __construct(
        public float  $amount,
        public string $description
    )
    {
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }

    public function process()
    {
        array_map(static function(){
            $this->amount = 35;
        }, [1]);

        echo 'Processing paddle transaction...';
    }

}
//    private string $status;
//
//    public function __construct()
//    {
////        $this->setStatus(self::STATUS_PENDING);
//        $this->setStatus(Status::PENDING);
//    }
//
//    public function setStatus(string $status): self
//    {
//        if (!isset(Status::ALL_STATUSES[$status])) {
//            throw new \InvalidArgumentException('Invalid Status');
//        }
//        $this->status = $status;
//
//        return $this;
//    }

