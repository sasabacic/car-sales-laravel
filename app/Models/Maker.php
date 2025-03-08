<?php

namespace App\Models;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maker extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function models(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }


}
