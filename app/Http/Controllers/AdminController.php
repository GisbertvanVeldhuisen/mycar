<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AdminController extends Controller
{
    public function adminPanel()
    {
        $users = User::all();

        $amount = $users->count();

        $report = Post::where('post_reported', '>', 0)->get();

        return view('admin-panel', ['users' => $users, 'amount' => $amount, 'report' => $report]);
    }

    public function deleteUser(Request $request)
    {
        User::destroy($request->get('id'));

        return redirect()->back();
    }

    public function deletePost(Request $request)
    {
        Post::destroy($request->get('post_id'));

        return redirect()->back();
    }
}
