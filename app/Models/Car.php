<?php

namespace App\Models;

use App\Models\City;
use App\Models\User;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\FuelType;
use App\Models\CarFeatures;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
            'maker_id',
            'model_id',
            'year',
            'price',
            'vin',
            'mileage',
            'car_type_id',
            'fuel_type_id',
            'user_id',
            'city_id',
            'address',
            'phone',
            'description',
            'published_at',
    ];

    public function carType(): BelongsTo{

        return $this->belongsTo(CarType::class,'car_type_id');
    }
    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function features(): HasOne{

        /* second argument is the field the column name in the database
        using which the two models relato to each other */
        /* Based on the car_id car features table connects to the car */
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage(): HasOne{

        return $this->hasOne(CarImage::class);
    }

    public function images(): HasMany{

        /* Among many images of the car Laravel will take the one that has the
        lowest position and it's gonna return that as primary image of that car */
        return $this->hasMany(CarImage::class);
    }



     public function favouredUsers(): BelongsToMany{

        return $this->belongsToMany(User::class,'favourite_cars','car_id');
    }

    


}
