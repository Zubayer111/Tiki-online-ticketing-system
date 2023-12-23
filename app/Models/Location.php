<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function tripsFrom()
    {
        return $this->hasMany(Trip::class, 'from_location_id');
    }

    public function tripsTo()
    {
        return $this->hasMany(Trip::class, 'to_location_id');
    }
}
