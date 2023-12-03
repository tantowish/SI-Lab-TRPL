<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssistantLecturer extends Model
{
    use HasFactory;
    protected $primaryKey = 'assistant_id';
    protected $fillable = [
        'user_id',
        'interest',
        'subject_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'assistant_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
