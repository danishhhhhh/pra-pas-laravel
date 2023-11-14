<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('cars.all', ["title" => "CARS", "cars_data" => Car::all()],);
    }

    public function show(Car $car)
    {
        return view('cars.detail', [
            "title" => "Detail",
            "car" => Car::find($car->id)
        ]);
    }
}
