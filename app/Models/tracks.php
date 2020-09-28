<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracks extends Model
{
    use HasFactory;

    protected $fillable = [
        'address'
    ];

    public function shipment()
    {
        return $this->belongsTo(shipment::class);
    }
}
