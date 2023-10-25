<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    public function LabAdministrator()
    {
        return $this->belongsTo(labAdministrator::class, 'lab_admin_id', 'lab_admin_id');
    }
}
