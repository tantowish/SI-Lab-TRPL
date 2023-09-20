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
}
