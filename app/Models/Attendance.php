<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable=[
        'assistant_id',
        'schedule_id'
    ];
    protected $primaryKey = 'attendance_id';


    public function schedule()
    {
        return $this->belongsTo(lectureSchedule::class, 'schedule_id', 'schedule_id');
    }
    public function assistantLecturer()
    {
        return $this->belongsTo(AssistantLecturer::class, 'assistant_id', 'assistant_id');
    }
}
