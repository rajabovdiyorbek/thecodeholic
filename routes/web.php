<?php

// use App\Http\Controllers\CarController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\SumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('{lang}/product/{id}/review/{reviewID}', function (string $lang, string $id, string $reviewId){
//     return "site lang: $lang, product id: $id, reviwer id: $reviewId";
// })->whereIn('lang', ['en', 'ru', 'kz'])->whereNumber('reviewID')->whereAlpha('id');

// Route::get('/product/{category?}/', function (string $category = "xyz") {
//     return "Product category: $category";
// });

// Route::get("/user/{username}", function (string $username){
//     return "$username";
// })->where("username","[a-z]+");

// Route::get("{lang}/product/{id}", function (string $lang, string $id){
//     return "$lang, $id";
// })->where(['lang'=> '[a-z]{2}', 'id'=> '\d{4,}']);


// Route::get("/search/{search}", function (string $search){
//     return $search;
// })->where('search', '.+');


// Route::get('/first/{a}/second/{b}', function(float $a, float $b){
//     return $a + $b;
// })->whereNumber(['a','b']);

// Route::apiResources([
//     'products'=> ProductController::class,
//     'cars'=> CarController::class,
// ]);

// Route::get('/sum/{a}/{b}', [SumController::class, 'sum'])->whereNumber(['a','b']);
// Route::get('/subtract/{a}/{b}', [SumController::class, 'subtract'])->whereNumber(['a','b']);



Route::get("/", [HomeController::class,"index"])->name("home");
Route::view('/about', 'about')->name('about');
