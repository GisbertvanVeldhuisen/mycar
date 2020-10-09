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

        $cars = Post::all();

        return view('car', [

            'brands' => $brands,
            'cars' => $cars

        ]);
    }
}
