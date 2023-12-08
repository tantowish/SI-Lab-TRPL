<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class labAdministrator extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'lab_admin_id';


    protected $fillable = [
        "name","email","password","username",'expertise','NIKA','intro'
    ];

    public function lectureSchedule()
    {
        return $this->hasMany(LectureSchedule::class,'lab_admin_id');
    }
    public function announcement()
    {
        return $this->hasMany(Announcement::class, 'lab_admin_id');
    }
    public function labReserve(){
        return $this->hasMany(LabReserve::class, "lab_admin_id");
    }
}
