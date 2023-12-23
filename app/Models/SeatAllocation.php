<?php

namespace App\Models;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeatAllocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'trip_id',
        'mobile_number',
        'name',
        'total_fare',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
