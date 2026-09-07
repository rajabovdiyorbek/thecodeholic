<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $car = Car::find(1);

        // dd($car->features);

        // $cars = Car::get();

        // dump($cars);

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2026,
        //     'price' => 30000,
        //     'vin' => '999',
        //     'mileage' => 5000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 'Something',
        //     'phone' => '999',
        //     'description' => null,
        //     'published_at' => now(),
        // ];
        // // // Create and return record
        // $car2 = Car::create($carData);
        // $car = Car::find(1);
        // $car->price = 50000;
        // $car->save();
        // Car::where('published_at', null)
        // ->where('user_id', 1)
        // ->update(['published_at' => now()]);
        // $car = Car::find(2);
        // $car->delete();
        // Car::truncate();
        // $car = Car::where('price', '>', 25000)->get();
        // dump($car);
        // $car = Car::find(1)->update(['price' => 15000]);
        // dd($car->carType);
        // $car = Car::find(1);
        // $carType = CarType::where('name', 'Sedan')->first();
        // $cars = Car::whereBelongsTo($carType)->get();
        // dd($cars);
        // $car->carType()->associate($carType);
        // $car->save();

        // $car = Car::find(1);
        // dd($car->favouredUsers);

        // $user = User::find(1);
        // dd($user->favoriteCars);

        $user = User::find(1);
        // $user->favoriteCars()->sync([4]);

        $user->favoriteCars()->detach();
        return view('home.index');
    }
}
