<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $primaryKey = 'reserve_id';

    protected $fillable = [
        'start_time',
        'end_time',
        'file',
        'user_id', 
        'laboratorium_id'
    ];

    public function laboratorium(){
        return $this->belongsTo(Laboratorium::class, "laboratorium_id");
    }
    public function labReserve(){
        return $this->hasMany(LabReserve::class, "reserve_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
