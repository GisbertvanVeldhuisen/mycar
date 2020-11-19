<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class CommentController extends Controller
{


//    Maakt comments aan
    public function create(Request $request)
    {

        $comment = Comment::create([
            'comment_content' => $request->post('comment_content'),
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }


//    Haalt comment op uit de database
    public function getComment(){

        $comments = Comment::all();

        return view('comment', [

            'comments' => $comments,

        ]);
    }

//    Delete comments uit database
    public function deleteComment(Request $request)
    {
        Comment::destroy($request->get('comment_id'));

        return redirect()->back();
    }





}
