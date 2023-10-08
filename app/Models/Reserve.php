<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    public function laboratorium(){
        return $this->belongsTo(Laboratorim::class, "laboratorium_id");
    }
    public function labReserve(){
        return $this->hasMany(LabReserve::class, "lab_reserve_id");
    }
}
