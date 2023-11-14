<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    public function index()
    {
        return view('motorcycle.all', ["title" => "MOTORCYCLE", "motorcycle_data" => Motorcycle::all()],);
    }

    public function show(int $id)
    {
        return view('motorcycle.detail', [
            "title" => "Detail",
            "motorcycle" => Motorcycle::find($id)
        ]);
    }
}
