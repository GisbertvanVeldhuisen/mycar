<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class CarPageController extends Controller
{
    public function getBrands()
    {
        $brands = Brand::all()->sortBy('brand_name');

        return view('car', ['brands' => $brands]);
    }
}
