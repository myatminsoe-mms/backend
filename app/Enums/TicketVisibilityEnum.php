<?php

namespace App\Enums;

enum TicketVisibilityEnum: string
{
    case SHOW = 'SHOW';
    case HIDE = 'HIDE';
    case SHOW_ON_SALE = 'SHOW_ON_SALE';
}
