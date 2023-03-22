<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class SubscribeController extends Controller
{
    public function getSub(){
        $user = User::find(Auth::user()->id);
        $sub = Subscribe::where('userId',$user->id)->orderBy('id','desc') -> get() -> count();
        if($sub >= 1){
            $tag = Tag::all();
            $cate = Category::all();
            $post = Post::where('subscribe',1) -> get();
            $postTop = Post::orderBy('id', 'desc') -> take(3) -> get();
            return view('blog',['post'=> $post,'tag' => $tag, 'cate'=> $cate, 'postTop' => $postTop]);
        }else {
            return view('subscribe');
        }
    }
    public function postSub(Request $request){
        $sub = new Subscribe;
        $sub -> userId = Auth::user()->id;
        if ($request->plan == "Bacis"){
            $sub -> price = 10;
            $sub -> name = "1 Month";
        } else if ($request->plan == "Premium"){
            $sub -> price = 20;
            $sub -> name = "3 Months";
        } else{
            $sub -> price = 40;
            $sub -> name = "5 Months";
        }
        $sub -> createdAt = new \DateTime();
        $sub -> payment = $request -> payment;
        $sub -> save();
        $user = User::find(Auth::user()->id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> save();
        return redirect() -> route('subscribe');
    }
    public function index(){
        $sub = Subscribe::paginate(10);
        return view('admin.subscribe.index', ['sub' => $sub]);
    }
}
