<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'history_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'project_id'
    ];


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
