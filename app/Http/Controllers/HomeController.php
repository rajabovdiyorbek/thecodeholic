<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // return view('index', [
        //     'name'=> 'Diyorbek',
        //     'surname'=> 'Rajabov',
        // ]);
        return view('index')
        ->with('name','Diyorbek')
        ->with('surname','Rajabov');

    }
}
