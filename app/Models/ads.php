<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function adminRel()
    {

        return $this->belongsTo(admin::class, 'admin');
    }
}
