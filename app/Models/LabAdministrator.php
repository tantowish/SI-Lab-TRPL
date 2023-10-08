<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class labAdministrator extends Model
{
    use HasFactory;

    public function lectureSchedule()
    {
        return $this->hasMany(lectureSchedule::class,'schedule_id');
    }
    public function announcement()
    {
        return $this->hasMany(Announcement::class, 'announcement_id');
    }
    public function labReserve(){
        return $this->hasMany(LabReserve::class, "lab_reserve_id");
    }
}
