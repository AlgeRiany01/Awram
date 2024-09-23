<?php

namespace App\Models;

use App\enums\patientBookingStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class medicineBooking extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $casts = [
        'status' => patientBookingStatus::class,
    ];


    public function medicineRel()
    {

        return $this->belongsTo(medicine::class, 'medicine');
    }
    public function patientRel()
    {

        return $this->belongsTo(patient::class, 'patient');
    }

    public function scopeWithValidMedicines($query)
    {
        return $query->whereHas('medicineRel', function ($query) {
            $query->valid();
        });
    }
}
