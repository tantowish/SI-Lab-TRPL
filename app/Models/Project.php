<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_id';


    public function projectHistory()
    {
        return $this->hasMany(ProjectHistory::class, 'project_id');
    }

    public function projectField()
    {
        return $this->hasMany(ProjectField::class, 'project_id');
    }

    
}
