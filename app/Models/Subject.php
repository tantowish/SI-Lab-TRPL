<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $primaryKey = 'subject_id';
    public $timestamps = false;



    public function user()
    {
        return $this->belongsTo(User::class, 'lecturer', 'user_id');
    }

    public function lectureSchedule()
    {
        return $this->hasMany(LectureSchedule::class, 'subject_id');
    }
    public function assistant()
    {
        return $this->hasMany(AssistantLecturer::class, 'subject_id');
    }
}
