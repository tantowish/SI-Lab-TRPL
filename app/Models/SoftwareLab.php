<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLab extends Model
{
    use HasFactory;

    public function software()
    {
        return $this->belongsTo(Software::class, 'software_id');
    }
    public function laboratorium()
    {
        return $this->belongsTo(Laboratorium::class, 'laboratorium_id');
    }

}
