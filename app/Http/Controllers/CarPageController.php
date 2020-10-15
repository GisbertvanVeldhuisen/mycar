<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Post;

class CarPageController extends Controller
{

    public function getBrands()
    {
        $brands = Brand::all()->sortBy('brand_name');

        return view('car', [

            'brands' => $brands

        ]);
    }

    public function getCars(Request $request)
    {
        $cat = $request->input('category');

        $cars = Post::where('car_brand', $cat)->get();

        return view('car', [

            'cars' => $cars

        ]);
    }
}
