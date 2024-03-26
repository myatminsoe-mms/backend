<?php

namespace App\Enums;

enum TokenActionEnum: string
{
    case ACCOUNT_ACTIVATION = 'ACCOUNT_ACTIVATION';
    case PASSWORD_RESET = 'PASSWORD_RESET';
}
