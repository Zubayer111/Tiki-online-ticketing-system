<?php

namespace App\Models;

use App\Models\Location;
use App\Models\SeatAllocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_location_id',
        'to_location_id',
        'bus_name',
        'start_time',
        'end_time',
        'fare',
    ];

    public function fromLocation()
    {
        return $this->belongsTo(Location::class, 'from_location_id');
    }

    public function toLocation()
    {
        return $this->belongsTo(Location::class, 'to_location_id');
    }

    public function customers()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}
