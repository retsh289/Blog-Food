<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Save;
use App\Models\Post;
use App\Models\Love;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function saveData(Request $request)
    {
        $post = Post::find($request->post_id);
        $save = new Save;
        $save->userId = Auth::user()->id;
        $save->postId = $post->id;
        $save->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Post saved successfully'
        ]);
    }
    public function loveData(Request $request)
    {
        $post = Post::find($request->post_id);
        $love = new Love;
        $love->userId = Auth::user()->id;
        $love->postId = $post->id;
        $love->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Post loved successfully'
        ]);
    }
    public function getLoveData ($id){
        $love = Love::where('postId',$id) -> get() -> count();
        return response()->json($love);
    }
    public function getSaveData ($id){
        $save = Save::where('postId',$id) -> get() -> count();
        return response()->json($save);
    }
}
