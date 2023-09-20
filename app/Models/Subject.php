<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public function lecturer()
    {
        return $this->belongsTo(Subject::class, 'user_id');
    }

    public function lectureSchedule()
    {
        return $this->hasMany(lectureSchedule::class, 'schedule_id');
    }
    
}
