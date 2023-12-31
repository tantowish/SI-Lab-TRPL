<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $primaryKey = 'field_id';
    public $timestamps = false;


    public function projectField()
    {
        return $this->hasMany(ProjectField::class, 'field_id');
    }

}
