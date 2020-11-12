<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    public function getUser(User $user)
    {

        return view('profile', [
            'userid' => $user->id,
            'posts' => $user->posts,
        ]);
    }

    function singlePageContent(Post $post)
    {
        return view('single-page', [
            'post_id' => $post->post_id,
        ]);
    }
}
