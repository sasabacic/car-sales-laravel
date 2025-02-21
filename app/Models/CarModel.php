<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarModel extends Model
{
    use HasFactory;
    protected $table = 'models';

    public $timestamps = false;

    protected $fillable = ['maker_id', 'name'];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
