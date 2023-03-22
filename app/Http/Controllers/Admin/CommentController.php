<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment($id, Request $request)
    {
        $comment = new Comment;
        $comment->userId = Auth::user()->id;
        $comment->postId = $id;
        $comment->message = $request->message;
        $comment->createdAt = new \DateTime();
        $comment->save();
        return back();
    }

    public function index(){
        $comment = Comment::paginate(10);
        return view('admin.comment.index',['com'=> $comment]);
    }

}
