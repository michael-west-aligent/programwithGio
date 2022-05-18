<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
//    public const STATUS_PAID = 'paid';
//    public const STATUS_PENDING = 'pending';
//    public const STATUS_DECLINED = 'declined';
//
//    public const ALL_STATUSES = [
//    self::STATUS_PAID => 'Paid',
//        self::STATUS_PENDING => 'Pending',
//        self::STATUS_DECLINED => 'Declined',
//    ];

    private string $status;

    public function __construct()
    {
//        $this->setStatus(self::STATUS_PENDING);
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid Status');
        }
        $this->status = $status;

        return $this;
    }
}
