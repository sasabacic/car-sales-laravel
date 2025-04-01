<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Faker\Factory as FakerFactory;
use App\Providers\Faker\PicsumImageProvider;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* we want to select the cars which belong to the currently authenticated user */
        /* we want to select the cars for the user_id of one */

        $cars = User::find(1)
        ->cars()
        ->orderBy('created_at','desc')
        ->get();

        // Instantiate Faker and add the custom provider
        $faker = FakerFactory::create();
        $faker->addProvider(new PicsumImageProvider($faker));

        // Add a random image URL to each car
        $cars = $cars->map(function ($car) use ($faker) {
            $car->imageUrl = $faker->imageUrl(300, 200); // Adjust size as needed
            return $car;
        });



        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::where('published_at','<',now())
        ->orderBy('published_at','desc');

        //we are counting the cars
        $carCount = $query->count();

        //we want to get the cars
        $cars = $query->limit(30)->get();

        return view('car.search',['cars' => $cars,'carCount' => $carCount]);

    }

    public function watchlist()
    {

        //we want to select watchlist cars
        $cars = User::find(4)->favouriteCars;

        // Instantiate Faker and add the custom provider
        $faker = FakerFactory::create();
        $faker->addProvider(new PicsumImageProvider($faker));

        // Add a random image URL to each car
        $cars = $cars->map(function ($car) use ($faker) {
            $car->imageUrl = $faker->imageUrl(300, 200); // Adjust size as needed
            return $car;
        });

        return view('car.watchlist', ['cars' => $cars]);
    }
}
