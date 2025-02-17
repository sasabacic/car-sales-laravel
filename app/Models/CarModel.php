<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table = 'models';

    public $timestamps = false;

    protected $fillable = ['maker_id', 'name'];
}
