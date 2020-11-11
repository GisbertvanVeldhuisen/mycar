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
                $request->file('image-text')->storeAs('public', ''),
                $request->file('logo')->store('public'),
                $request->file('header-image')->store('public'),
            ]
        );


        return redirect()->back()->withInput();
    }


    public function getHome()
    {
        $homeinfo = Home::find(1);
        $cars = Post::take(3)->orderBy('created_at', 'desc');
        /*dd($cars);*/

        return view('home-page', ['homeinfo' => $homeinfo ,'cars' => $cars]);
    }

    public function getFormInfo()
    {
        $forminfo = Home::find(1);
        return view('home-page-edit', ['forminfo' => $forminfo]);
    }
}
