<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class PostController extends Controller
{
    public function create(Request $request)
    {
        Post::create([
            'post_title' => $request->post('post_title'),
            'post_intro' => $request->post('post_intro'),
            'post_left_text' => $request->post('post_left_text'),
            'post_right_text' => $request->post('post_right_text'),
            'car_brand' => $request->post('car_brand'),
            'car_model' => $request->post('car_model'),
            'car_buildyear' => $request->post('car_buildyear'),
            'car_mileage' => $request->post('car_mileage'),
            'car_color' => $request->post('car_color'),
            'car_horsepower' => $request->post('car_horsepower'),
            'user_id' => Auth::id(),
        ]);
        $id = Auth::id();
        $rules['template_file'] = 'required|file|mimes:png';


        //$post_id = Post::where('post_id', );
        if ($request->file('image-left-text'))
            $request->file('image-left-text')->storeAs('public', $id. 'image-left-text.'. $request->file('image-left-text')->getClientOriginalExtension());

        if ($request->file('image-right-text'))
            $request->file('image-right-text')->storeAs('public', $id. 'image-right-text.'. $request->file('image-right-text')->getClientOriginalExtension());

        return redirect()->back();
    }

    public function getPost()
    {

        $brands = Brand::all()->sortBy('brand_name');

        $posts = Post::all();

        return view('post', [

            'posts' => $posts,
            'brands' => $brands

        ]);
    }

    function singlePage($post_id)
    {

        $posts = Post::findOrFail($post_id);

        return view('single-post', [

            'post' => $posts,

        ]);
    }

    function singlePageContent($post_id)
    {

        $posts = Post::findOrFail($post_id);

        return view('single-post', [

            'posts' => $posts,

        ]);
    }

    public function deletePost(Request $request)
    {
        Post::destroy($request->get('post_id'));

        return redirect()->back();
    }


}
