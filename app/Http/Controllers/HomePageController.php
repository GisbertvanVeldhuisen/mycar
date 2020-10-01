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
            ]
        );

    }

    public function getHome()
    {
        $homeinfo = Home::all();

        return view('home-page', ['homeinfo' => $homeinfo]);
    }
}
