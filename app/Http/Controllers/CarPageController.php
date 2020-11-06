<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class CarPageController extends Controller
{

    public function getCars(Request $request)
    {

        $cat = $request->input('category');


        if($cat):

            $cars = Post::where('car_brand', $cat)->get();

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

    public function reportButton() {

        DB::table('post')->increment('post_reported', 1);

        return redirect()->back();
    }


}
