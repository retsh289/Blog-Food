<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
class TagController extends Controller
{
    public function index(){
        $tag = Tag::paginate(10);
        return view('admin.tag.index', ['tag' => $tag] );
    }

    public function create(StoreRequest $request){
        $tag = new Tag;
        $tag -> name = $request -> name;
        $tag -> intro = $request -> intro;
        $tag -> createdAt = new \DateTime();
        $tag -> save();
        return redirect() -> route('admin.tag.index') -> with('success', 'Create successfully');
    }

    public function update(UpdateRequest $request, $id){
       $tag = Tag::find($id);
       $tag->name = $request -> name;
       $tag->intro = $request -> intro;
       $tag->updatedAt = new \DateTime();
       $tag->save();
       return redirect() -> route('admin.tag.index') -> with('success', 'Create successfully');
    }

    public function delete($id){
        $tag = Tag::find($id);
        $tag -> delete();
        return redirect() -> route('admin.tag.index') -> with('success', 'Delete successfully');
    }
}
