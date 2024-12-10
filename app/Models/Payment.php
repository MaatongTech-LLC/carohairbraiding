<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'booking_id',
        'amount',
        'method',
        'status',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
