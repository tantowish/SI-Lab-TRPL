<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabReserve extends Model
{
    use HasFactory;
    protected $primaryKey = 'reserve_id';

    protected $fillable = [
        'reserve_id',
        'lab_admin_id',
        'isApproved'
    ];


    public function reserve(){
        return $this->belongsTo(Reserve::class, "reserve_id", "reserve_id");
    }
    public function labAdministrator(){
        return $this->belongsTo(LabAdministrator::class, "lab_admin_id", "lab_admin_id");
    }
}   
