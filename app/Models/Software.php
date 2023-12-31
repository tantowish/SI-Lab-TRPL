<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $primaryKey = 'software_id';
    protected $table = 'software';
    public $timestamps = false;


    public function softwareLab()
    {
        return $this->hasMany(SoftwareLab::class, "software_id");
    }
}
