<?php

namespace App\Models;

use App\Enums\OfferStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'tel_number',
        'email',
        'offer_id',
        'res_date',
        'quantity'
    ];
    protected $dates = [
        'res_date'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
