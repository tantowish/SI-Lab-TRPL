<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;

    public function lectureSchedule()
    {
        return $this->hasMany(LectureSchedule::class, 'schedule_id');
    }
    public function softwareLab()
    {
        return $this->hasMany(SoftwareLab::class, 'software_lab_id');
    }

    public function reserve(){
        return $this->hasMany(Reserve::class, "reserve_id");
    }

}
