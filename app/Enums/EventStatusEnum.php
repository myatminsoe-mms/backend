<?php

namespace App\Enums;

enum EventStatusEnum: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case DRAFT = 'DRAFT';
}
