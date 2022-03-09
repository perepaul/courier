<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'tracks' => 'object',
        'delivered_at' => 'date',
    ];

    public function tracks()
    {
        return $this->hasMany(tracks::class);
    }

    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'Pending';
            case 2:
                return 'Processing';
            case 3:
                return 'In Transit';
            case 4:
                return 'Awaiting Clearance';
            case 5:
                return 'Delivered';
            default:
                return 'Pending';
        }
    }
}
