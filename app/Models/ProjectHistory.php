<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'history_id';


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
