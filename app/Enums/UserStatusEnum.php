<?php

namespace App\Enums;

enum UserStatusEnum: string
{
    case Locked = 'Locked';
    case Active = 'Active';
    case Inactive = 'Inactive';
}
