<?php

namespace App\Models;

use App\Models\Car;
use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars(): HasMany{

        return $this->hasMany(Car::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
