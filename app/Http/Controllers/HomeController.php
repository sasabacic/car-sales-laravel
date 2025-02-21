<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\CarType;
use App\Models\CarImage;
use App\Models\FuelType;
use App\Models\CarFeatures;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

         /* $car = Car::find(1);

        dump($car->features,$car->primaryImage);

        $car->features->update(['abs' => 1]);

         $car->primaryImage->delete(); */

        /* $car = Car::find(2); */

        /* $carFeatures = new CarFeatures([
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
        ]);

         $car->features()->save($carFeatures);
 */
        /* $car = Car::find(1); */
        /* dd($car->images);
 */
        //Create new Image

        /* $carImage = new CarImage([
            'image_path' => 'test2',
            'position' => 2
        ]);

        $car->images()->save($carImage); */

        //Second option to create an image
        /* $car->images()->create(['image_path' => 'Something 3','position' => 3]); */


        //Creating a multiple images

        /* $car->images()->saveMany([
            new CarImage(['image_path' => 'something','position' => 4]),
            new CarImage(['image_path' => 'something','position' => 5])

        ]);

        $car->images()->createMany([
            ['image_path' => 'something','position' => 6],
            ['image_path' => 'something','position' => 7]

        ]); */

        //Many to one relationship
        /* $car = Car::find(1);

        $carType = CarType::where('name','Sedan')->first();
 */
        // the same as below
        /* $car->car_type_id = $carType->id;
        $car->save(); */

        // Change the CarType of the $car
        /* $car->carType()->associate($carType);
        $car->save(); */


        //Many to Many relationship

        /* $car = Car::find(1);
        dd($car->favouredUsers); */

        /* $user = User::find(1);
        dd($user->favouriteCars); */

        $user = User::find(1);
        /* $user->favouriteCars()->attach([1,2]); */

        /* $user->favouriteCars()->syncWithPivotValues([3],['']); */

        $user->favouriteCars()->detach();




        return view('home.index');
    }
}
