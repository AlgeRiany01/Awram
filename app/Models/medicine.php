<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function scopeValid($query)
    {
        return $query->where('qint', '>', 0)->where('expired', '>', now());
    }


    public function bookings()
    {
        return $this->hasMany(medicineBooking::class, 'medicine');
    }
}
