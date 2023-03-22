<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
class CategoryController extends Controller
{
    public function index(){
        $category = Category::paginate(10);
        return view('admin.category.index', ['category' => $category]);
    }

    public function create(StoreRequest $request){
        $cate = new Category;
        $cate -> name = $request -> name;
        $cate -> intro = $request -> intro;
        $image = $request->name. '.' .$request->image->extension();
        $request-> image-> move(public_path('img/category'),$image);
        $cate -> image = $image;
        $cate -> createdAt = new \DateTime();
        $cate -> save();
        return redirect() -> route('admin.category.index') -> with('success', 'Create successfully');
    }

    public function update(UpdateRequest $request, $id){
        $cate = Category::find($id);
        $cate->name = $request -> name;
        $cate->intro = $request -> intro;
        if (!empty($request->image)){
            $url_old = public_path('img/category/'.$cate -> image);
            if (file_exists($url_old)){
                unlink($url_old);
            }
            $image = $request->name. '.' .$request->image->extension();
            $request-> image-> move(public_path('img/category/'),$image);
            $cate-> image = $image;
        }
        $cate->updatedAt = new \DateTime();
        $cate->save();
        return redirect() -> route('admin.category.index') -> with('success', 'Update successfully');
    }

    public function delete($id){
        $cate = Category::find($id);
        $cate -> delete();
        return redirect() -> route('admin.category.index') -> with('success', 'Delete successfully');
    }
}
