<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $primaryKey = 'announcement_id';

    protected $fillable = [
        "title",
        "description",
        "lab_admin_id",
    ];
    public function LabAdministrator()
    {
        return $this->belongsTo(LabAdministrator::class, 'lab_admin_id', 'lab_admin_id');
    }
}
