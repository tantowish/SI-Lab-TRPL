<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public function schedule()
    {
        return $this->belongsTo(lectureSchedule::class, 'schedule_id');
    }
    public function assistantLecturer()
    {
        return $this->belongsTo(AssistantLecturer::class, 'assistant_id');
    }
}