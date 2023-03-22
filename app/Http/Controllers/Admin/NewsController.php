<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(10);
        return view('admin.news.index', ['news'=> $news]);
    }
    public function create(Request $request){
        $new = new News;
        $new -> email = $request -> email;
        $new -> createdAt = new \DateTime();
        $new -> save();
        return back();
    }
}
