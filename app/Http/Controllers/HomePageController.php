<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function updateOrCreate(Request $request)
    {
        Home::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'title' => $request->get('title'),
                'intro_text' => $request->get('intro'),
                'text_image' => $request->get('text'),
            ]
        );

        if ($request->file('image-text'))
            $request->file('image-text')->storeAs('public', 'image-text.jpg'. $request->file('logo')->getClientOriginalExtension());

        if ($request->file('logo'))
            $request->file('logo')->storeAs('public', 'logo.' . $request->file('logo')->getClientOriginalExtension());

        if ($request->file('header-image'))
            $request->file('header-image')->storeAs('public', 'header-image' . $request->file('header-image')->getClientOriginalExtension());


        return redirect()->back()->withInput();
    }


    public function getHome()
    {
        $homeinfo = Home::find(1);
        $cars = Post::take(3)->orderBy('created_at', 'desc')->get();

        return view('home-page', ['homeinfo' => $homeinfo ,'cars' => $cars]);
    }

    public function getFormInfo()
    {
        $forminfo = Home::find(1);
        return view('home-page-edit', ['forminfo' => $forminfo]);
    }
}
