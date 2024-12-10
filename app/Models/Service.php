<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'price',
        'deposit_price',
        'type',
        'image',
        'duration',
        'description',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
