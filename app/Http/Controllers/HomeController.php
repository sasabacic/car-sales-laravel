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
use Database\Factories\CarModelFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Sequence;

class HomeController extends Controller
{
    public function index(){

          /* $car = Car::find(1);

        dump($car->features, $car->primaryImage); */

        /* $car->feature->abs = 0;
        $car->features->save();
 */
        /* $car->features()->update(['abs' => 2]);

        $car->primaryImage()->delete(); */

        /* Creating the relations between the car and CarFeature */

        /* $car = Car::find(2);

         /*$carFeatures = new CarFeatures([
        'abs' => false,
        'air_conditioning' => false,
        'power_windows' => false,
        'power_door_locks' => false,
        'cruise_control' => false,
        'bluetooth_connectivity' => false,
        'remote_start' => false,
        'gps_navigation' => false,
        'heated_seats' => false,
        'climate_control' => false,
        'rear_parking_sensors' => false,
        'leather_seats' => false

]);
 */
    /* $car->features()->save($carFeatures); */

    /* One to many relationship */

        /* $car = Car::find(1); */


        /* Creating new image for Has Many relation */
        /* we need to create a new instance of the image */

        /* $carImage = new CarImage([
            'image_path' => 'test1', 'position' => 1,
        ]);

        $car->images()->save($carImage); */




        //Second option to create an image
       //$car->images()->create(['image_path' => 'Something 2','position' => 3]);

        /* Creating a multiple images */

        /*saveMany is used to save multiple related model instances (e.g., CarImage)
        and associate them with the parent model */
        /* Parent model must exist in the database because saveMany relies
        on the parent ID to set the foreign key */
        /* saveMany does not create or modify the Car model itself. It only creates and saves the
        related CarImage models and associates them with the $car model. */

        /* $car->images()->saveMany([
            new CarImage(['image_path' => 'test 3', 'position 3']),
            new CarImage(['image_path' => 'test 4', 'position 4']),
        ]); */

        /* $car->images()->createMany([
            ['image_path' => 'something','position' => 4],
            ['image_path' => 'something','position' => 5],
        ]); */

        //Many to one relationship

        /* $car = Car::find(1);
        dd($car->carType);
 */

        //First means it returns the first method the matches the query
        /* $carType = CarType::where('name','Hatchback')->first();

        $cars = $carType->cars;

        dd($cars); */

        /* $car = Car::find(1);
        $carType = CarType::where('name','Sedan')->first(); */

        /* Changing the association of the car model */
        /* $car->carType()->associate($carType);
        $car->save(); */

        //Many to Many relationship

        /* We are selecting all the users which added the first car into its favorite cars */
        /* $car = Car::find(1);
        dd($car->favouredUsers);
 */
        /* $user = User::find(1);
        dd($user->favouriteCars); */


        /* Create the new records in the pivot table */
        /* $user = User::find(1); */
        /* $user->favouriteCars()->attach([1, 2]); */

        /* we are removing everything from the database with the sync and add only 3 */
        /* $user->favouriteCars()->sync([3]);


        /* Deleting the detached data */
        /* $user->favouriteCars()->detach([1,2]); */

        /* $user->favouriteCars()->syncWithPivotValues([3],['']); */

        /* $user->favouriteCars()->detach();  */


        /* Using factories to generate data inside the database,create method
         inserts the record in the database */
         /* For multiple inserts in the database we can provide count */
         /* If we just want to create instances of maker model and don't wanna put
         it in the database we use the method make() */
         /* create method is what inserts the record in the database */

          /* $maker = Maker::factory()->count(10)->create([]);
         dd($maker); */

         /* User::factory()
         ->count(10) */
         /* ->sequence(
            ['name' => 'Zura'],
            ['name' => 'John']
         ) */
        /* ->sequence(fn(Sequence $sequence) => [
            'name' => 'Name ' . $sequence->index
         ])
         ->create();

         /* User::factory()
         ->count(10)
         ->trashed()
         ->create();
 */
         //Creating the relational data factory with the models

         /* Maker::factory()
         ->count(1) */
         /* ->hasModels(1,function(array $attributes, Maker $maker){
            return [];
         }) */
         /* ->has(CarModel::factory()->count(3),)
         ->create(); */

         //$maker = Maker::factory()->create();

         /* CarModel::factory()
         ->count(5)
         ->for($maker)
         /* ->forMaker(['name' => 'Lexus']) */
         /* ->for(Maker::factory()->state(['name' => 'Lexus'])) */
         /* ->create(); */

         /* $carImage = CarImage::factory()->create(['car_id' => 1]); */


         /* User::factory()
         ->has(Car::factory()->count(5),'favouriteCars')
         ->create(); */
         return view('home.index');
    }
}
