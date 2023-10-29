<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLab extends Model
{
    use HasFactory;
    protected $primaryKey = 'software_lab_id';
    public $timestamps = false;
    protected $table = 'software_lab';



    public function software()
    {
        return $this->belongsTo(Software::class, 'software_id', 'software_id');
    }
    public function laboratorium()
    {
        return $this->belongsTo(Laboratorium::class, 'laboratorium_id', 'laboratorium_id');
    }

}
