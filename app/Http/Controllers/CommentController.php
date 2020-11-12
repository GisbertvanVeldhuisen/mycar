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
    public function create(Request $request)
    {
//        $comment = new Comment();
//
//        $comment->comment_content = $request->post('comment_content');
//
//        $comment->save();

        Comment::create([
            'comment_content' => $request->post('comment_content'),
            'user_id' => Auth::id(),
        ]);

        return redirect()->back();
    }

    public function getComment(){

        $comments = Comment::all();

        return view('comment', [

            'comments' => $comments,

        ]);
    }

    public function singlePage($comment_id){

        $comments = Comment::findOrFail($comment_id);

        return view('single-comment', [

            'comment' => $comments,

        ]);
    }

    public function singlePageContent($comment_id){

        $comments = Comment::findOrFail($comment_id);

        return view('single-comment', [

            'comments' => $comments,

        ]);
    }

    public function deleteComment(Request $request)
    {
        Comment::destroy($request->get('comment_id'));

        return redirect()->back();
    }

    public function getUsersComment()
    {
        $users = User::all();

        return view('comment', ['users' => $users]);
    }


}
