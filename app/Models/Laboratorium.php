<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;
    protected $primaryKey = 'laboratorium_id';
    protected $keyType = 'string'; 
    protected $table = 'laboratorium';
    public $timestamps = false;



    public function lectureSchedule()
    {
        return $this->hasMany(LectureSchedule::class, 'laboratorium_id');
    }
    public function softwareLab()
    {
        return $this->hasMany(SoftwareLab::class, 'laboratorium_id');
    }

    public function inventory(){
        return $this->hasMany(Inventory::class, "laboratorium_id");
    }

}
