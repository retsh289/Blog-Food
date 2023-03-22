<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
class DashboardController extends Controller
{
    public function index(){
        $subCount = Subscribe::all()->count();
        $subPrice = Subscribe::all()->sum('price');
        $member = User::where('roleId',3)->count();
        $post = Post::all() -> count();
        $com = Comment::all() -> count();
        return view('admin.index',['subCount'=>$subCount,'subPrice'=>$subPrice,'member'=>$member,'post'=> $post,'com'=>$com]);
    }
}
