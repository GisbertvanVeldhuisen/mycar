<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Post;

class CarPageController extends Controller
{

    public function getCars(Request $request)
    {

        $cat = $request->input('category');

        $color = $request->input('color');

        if($cat || $color):

            $cars = Post::where('car_brand', $cat)->where('car_color', $color)->get();

        else:

            $cars = Post::all();

        endif;

        $brands = Brand::all()->sortBy('brand_name');

        return view('car', [

            'cars' => $cars,
            'brands' => $brands,
            'cat' => $cat

        ]);
    }
}
