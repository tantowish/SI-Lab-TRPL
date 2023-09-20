<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function projectHistory()
    {
        return $this->hasMany(ProjectHistory::class, 'history_id');
    }

    public function projectField()
    {
        return $this->hasMany(ProjectField::class, 'project_field_id');
    }

    
}
