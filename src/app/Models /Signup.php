<?php

namespace App\Models;

class Signup
{

    /**
     * @param User $userModel
     * @param Invoice $invoiceModel
     */
    public function __construct(\App\Models\User $userModel, \App\Models\Invoice $invoiceModel)
    {
    }
}