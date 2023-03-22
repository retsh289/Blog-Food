<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $postRng = Post::inRandomOrder()->where('subscribe', 0)->take(6)->get();
        $postNew = Post::where('subscribe', 0)->orderBy('id', 'desc')->take(5)->get();
        $postTop = Post::where('subscribe', 0)->orderBy('id', 'desc')->take(3)->get();
        $tag = Tag::all();
        $cate = Category::all();
        for ($i = 0; $i <= 5; $i++) {
            $com[] = Comment::where('postId', $postRng[$i]->id)->get()->count();
        };
        return view('index', ['postRng' => $postRng, 'postNew' => $postNew, 'tag' => $tag, 'cate' => $cate, 'postTop' => $postTop, 'com' => $com]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $post = Post::find($id);
        $tag = Tag::all();
        $cate = Category::all();
        $postTop = Post::where('subscribe', 0)->orderBy('id', 'desc')->take(3)->get();
        $comment = Comment::where('postId', $id)->get();
        return view('detail', ['post' => $post, 'tag' => $tag, 'cate' => $cate, 'postTop' => $postTop, 'com' => $comment]);
    }
    public function tag($id)
    {
        $post = Post::where('tagId', $id)->where('subscribe', 0)->orderBy('id', 'desc')->get();
        $tag = Tag::all();
        $cate = Category::all();
        $postTop = Post::where('subscribe', 0)->orderBy('id', 'desc')->take(3)->get();
        $blog = Tag::find($id);
        return view('blog', ['post' => $post, 'tag' => $tag, 'cate' => $cate, 'postTop' => $postTop, 'blog' => $blog]);
    }
    public function category($id)
    {
        $post = Post::where('categoryId', $id)->where('subscribe', 0)->orderBy('id', 'desc')->get();
        $tag = Tag::all();
        $cate = Category::all();
        $postTop = Post::orderBy('id', 'desc')->take(3)->get();
        $blog = Category::find($id);
        return view('blog', ['post' => $post, 'tag' => $tag, 'cate' => $cate, 'postTop' => $postTop, 'blog' => $blog]);
    }

    public function recipes()
    {
        $cate = Category::all();
        return view('recipes', ['cate' => $cate]);
    }
    public function search(Request $request)
    {
        $term = $request -> search;
        $post = Post::search($term);
        $tag = Tag::all();
        $cate = Category::all();
        $postTop = Post::where('subscribe', 0)->orderBy('id', 'desc')->take(3)->get();
        $blog = 'search';
        return view('blog',['tag' => $tag, 'cate' => $cate,'postTop' => $postTop, 'post' => $post,'blog'=> $blog, 'term' => $term]);
    }
}
