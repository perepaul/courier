<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','address','phone','email'
    ];

    protected $casts = [
        'tracks'=>'object'
    ];

    public function tracks()
    {
        return $this->hasMany(tracks::class);
    }
}
