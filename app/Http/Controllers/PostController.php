<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
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
        ]);
        return redirect()->back();
    }

    public function getPost(){
        $posts = Post::all();

        return view('post', ['posts' => $posts]);
    }

    public function deletePost(Request $request)
    {
        Post::destroy($request->get('post_id'));

    return redirect()->back();
    }
}
