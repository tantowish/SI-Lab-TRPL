<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectField extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }
}
