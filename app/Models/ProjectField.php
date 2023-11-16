<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectField extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_field_id';
    protected $fillable = [
        'project_id',
        'field_id'
    ];
    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id', 'field_id');
    }
}
