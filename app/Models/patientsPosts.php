<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientsPosts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patientRel()
    {

        return $this->belongsTo(patient::class, 'patient');
    }
}
