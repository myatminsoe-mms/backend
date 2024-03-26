<?php

namespace App\Enums;

enum PurchaseStatusEnum: string
{
    case PAYMENT_PENDING = 'PAYMENT_PENDING';
    case PAYMENT_FAILED = 'PAYMENT_FAILED';
    case PAYMENT_COMPLETED = 'PAYMENT_COMPLETED';
}
