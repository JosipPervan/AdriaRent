<?php

namespace App\Models;

use App\Enums\OfferStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','status'];

    protected $casts = [
        'status'=>OfferStatus::class,
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
