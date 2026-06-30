<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        'name'=> 'Diyorbek',
        'email'=> 'rajabov.diyorbek.it@gmail.com',
    ];
    dd($person);
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
