<?php

namespace App\Enums;

enum CheckoutStatusEnum: string
{
    case ON_HOLD = 'ON_HOLD';
    case RELEASED = 'RELEASED';
    case PURCHASED = 'PURCHASED';
}
