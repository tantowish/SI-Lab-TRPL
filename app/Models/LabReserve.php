<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReserve extends Model
{
    use HasFactory;

    public function reserve(){
        return $this->belongsTo(Reserve::class, "reserve_id");
    }
    public function labAdministrator(){
        return $this->belongsTo(labAdministrator::class, "lab_admin_id");
    }
}   
