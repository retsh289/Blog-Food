<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
class PostController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        $cate = Category::all();
        $post = Post::paginate(10);
        return view('admin.post.index', ['tag' => $tag, 'cate' => $cate, 'post' => $post]);
    }

    public function create(StoreRequest $request)
    {
        $post = new Post;
        if (!($request->categoryId == 0)) {
            $post->categoryId = $request->categoryId;
        }
        $post->title = $request->title;
        $post->tagId = $request->tagId;
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/post/'), $image);
        $post->image = $image;
        $post->description = $request->description;
        $post->content = $request->content;
        if ($request->subscribe == 0) {
            $post->subscribe = false;
        } else {
            $post->subscribe = true;
        }

        $post->createdAt = new \DateTime();
        $post->save();
        return redirect()->route('admin.post.index')->with('success', 'Created successfully');
    }

    public function update(UpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->tagId = $request->tagId;
        if (!empty($request->image)) {
            $url_old = public_path('img/post/' . $post->image);
            if (file_exists($url_old)) {
                unlink($url_old);
            }
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/post/'), $image);
            $post->image = $image;
        }
        $post->description = $request->description;
        $post->content = $request->content;
        if ($request->subscribe == 0) {
            $post->subscribe = false;
        } else {
            $post->subscribe = true;
        }
        $post->updatedAt = new \DateTime();
        $post->save();
        return redirect()->route('admin.post.index')->with('success', 'Update successfully');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete;
        return redirect()->route('admin.post.index')->with('success', 'Delete successfully');
    }
}
