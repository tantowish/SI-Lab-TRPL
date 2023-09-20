<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    public function projectField()
    {
        return $this->hasMany(ProjectField::class, 'project_field_id');
    }

}
