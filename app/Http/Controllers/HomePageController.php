<?php

namespace App\Http\Controllers;

use App\Models\Home;
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
                $path = $request->file('image-text')->store('public'),
                $path = $request->file('logo')->store('public'),
                $path = $request->file('header-image')->store('public'),
            ]
        );


        return redirect()->back()->withInput();
    }


    public function getHome()
    {
        $homeinfo = Home::find(1);

        return view('home-page', ['homeinfo' => $homeinfo]);
    }

    public function getFormInfo()
    {
        $forminfo = Home::find(1);
        return view('home-page-edit', ['forminfo' => $forminfo]);
    }
}
