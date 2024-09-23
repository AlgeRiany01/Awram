<?php

namespace App\Models;

use App\enums\patientBookingStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class patientBooking extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $casts = [
        'status' => patientBookingStatus::class,
    ];


    public function hospitalRel()
    {

        return $this->belongsTo(hospital::class, 'hospital');
    }
}
