<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index');
    }
    public function create(Request $request)
    {
        return view('car.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function edit(string $id)
    {
        return view('car.edit');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('car.show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search() {
        return view('car.search');
    }
}
