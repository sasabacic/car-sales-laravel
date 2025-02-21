<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarFeatures extends Model
{
    use HasFactory;

    public $timestamps = false;


    //Defining primary key on CarFeatures
    protected $primaryKey = 'car_id';

    protected $fillable = [
    'car_id',
    'abs',
    'air_conditioning',
    'power_windows',
    'power_door_locks',
    'cruise_control',
    'bluetooth_connectivity',
    'remote_start',
    'gps_navigation',
    'heated_seats',
    'climate_control',
    'rear_parking_sensors',
    'leather_seats',
];

public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
