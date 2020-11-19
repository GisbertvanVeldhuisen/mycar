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
                /*past alleen aan van id 1*/
                'id' => 1
            ],
            [
                /*vult deze tabellen*/
                'title' => $request->get('title'),
                'intro_text' => $request->get('intro'),
                'text_image' => $request->get('text'),
            ]
        );
        /*controleert of age png is*/
        $request->validate([
            'image-text' => ['mimes:png'],
            'logo' => ['mimes:png'],
            'header-image' => ['mimes:png'],
        ]);

        /*controleert of image gevuld is anders doet hij niks.*/
        if ($request->file('image-text'))
            $request->file('image-text')->storeAs('public', 'image-text.'. $request->file('image-text')->getClientOriginalExtension());

        if ($request->file('logo'))
            $request->file('logo')->storeAs('public', 'logo.' . $request->file('logo')->getClientOriginalExtension());

        if ($request->file('header-image'))
            $request->file('header-image')->storeAs('public', 'header-image.' . $request->file('header-image')->getClientOriginalExtension());


        return redirect()->back()->withInput();
    }


    public function getHome()
    {
        /*haalt alle info uit de tabel op*/
        $homeinfo = Home::find(1);
        $cars = Post::take(3)->orderBy('created_at', 'desc')->get();

        return view('home-page', ['homeinfo' => $homeinfo ,'cars' => $cars]);
    }

    public function getFormInfo()
    {
        /*Haalt alle info op voor het formulier*/
        $forminfo = Home::find(1);
        return view('home-page-edit', ['forminfo' => $forminfo]);
    }
}
