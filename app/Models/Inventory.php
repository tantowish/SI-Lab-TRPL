<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $primaryKey = 'inventory_id';
    protected $fillable = [
        'laboratorium_id',
        'item_name',
        'no_item',
        'good',
        'bad',
        'information',
    ];

    public function laboratorim(){
        return $this->belongsTo(Laboratorium::class, "laboratorium_id");
    }
}
