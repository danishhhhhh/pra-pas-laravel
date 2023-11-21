<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.all', ["title" => "BRANDS", "brand_data" => Brand::all()],);
    }

    public function show(Brand $brand)
    {
        return view('brand.detail', [
            "title" => "Detail",
            "brand" => Brand::find($brand->id)
        ]);
    }
}
