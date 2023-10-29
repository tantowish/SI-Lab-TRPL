<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lectureSchedule extends Model
{
    use HasFactory;
    protected $primaryKey = 'schedule_id';


    public function laboratorium()
    {
        return $this->belongsTo(Laboratorium::class, 'laboratorium_id', 'laboratorium_id');
    }

    public function labAdministrator()
    {
        return $this->belongsTo(labAdministrator::class, 'lab_admin_id', 'lab_admin_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }

    public function attendence()
    {
        return $this->hasMany(Attendance::class, 'schedule_id');
    }
}
