<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\FuelType;
use App\Models\CarFeatures;
use Illuminate\Http\Request;
use Faker\Factory as FakerFactory;
use App\Providers\Faker\PicsumImageProvider;
use Database\Factories\CarModelFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Sequence;

class HomeController extends Controller
{
    public function index(){


        $cars = Car::where('published_at','<',now())
        ->orderBy('published_at','desc')
        ->limit(30)
        ->get();

        // Instantiate Faker and add the custom provider
        $faker = FakerFactory::create();
        $faker->addProvider(new PicsumImageProvider($faker));

        // Add a random image URL to each car
        $cars = $cars->map(function ($car) use ($faker) {
            $car->imageUrl = $faker->imageUrl(300, 200); // Adjust size as needed
            return $car;
        });

        //we are passing the cars threw associative array
        return view('home.index',['cars' => $cars]);
    }
}
