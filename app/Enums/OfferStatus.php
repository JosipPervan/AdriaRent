<?php

namespace App\Enums;

enum OfferStatus: string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavailable = 'unavailable';
}
