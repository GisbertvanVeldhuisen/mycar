<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $users = User::all();

        $amount = $users->count();

        return view('admin-panel', ['users' => $users, 'amount' => $amount]);
    }

    public function delete(Request $request)
    {
        User::destroy($request->get('id'));

        return redirect()->back();
    }

    public function index(){
        return view('admin-panel');
    }
}
