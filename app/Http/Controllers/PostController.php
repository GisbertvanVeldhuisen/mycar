<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class PostController extends Controller
{
    public function create(Request $request)
    {
//        $posts = new Post();
//
//        $posts->post_title = $request->post('post_title');
//        $posts->post_intro = $request->post('post_intro');
//        $posts->post_left_text = $request->post('post_left_text');
//        $posts->post_right_text = $request->post('post_right_text');
//
//        $posts->save();

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

    function singlePage($post_id){

        $posts = Post::findOrFail($post_id);

        return view('single-post', [

            'post' => $posts,

        ]);
    }

    function singlePageContent(){
        $post = Post::find($post_id);

        $posts = Post::where('post_id', '=', $post->post_id)->get();

//        $posts = Post::find($post_id);

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
