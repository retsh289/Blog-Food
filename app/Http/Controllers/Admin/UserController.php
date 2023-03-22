<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
class UserController extends Controller
{
    public function admin(){
        $user = User::where('roleId',2) -> paginate(10) ;
        return view('admin.user.index', ['user' => $user, 'title' => 'Admin']);
    }
    public function member(){
        $user = User::where('roleId',3) -> paginate(10);
        return view('admin.user.index', ['user' => $user, 'title' => 'Member']);
    }
    public function create(StoreRequest $request){
        $user = new User;
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $image = time(). '.' .$request->image->extension();
        $request-> image-> move(public_path('img/user/'),$image);
        $user -> image = $image;
        $user -> createdAt = new \DateTime();
        $user -> roleId = $request -> roleId == 'Member' ? 3 : 2;
        $user -> save();
        return redirect() -> route('admin.admin.index') -> with('success', 'Create successfully');
    }
    public function update($id, UpdateRequest $request){
        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        if (!empty($request -> password)){
            $user-> password = $request -> password;
        }
        if (!empty($request->image)){
            $url_old = public_path('img/user/'.$user -> image);
            if (file_exists($url_old)){
                unlink($url_old);
            }
            $image = time(). '.' .$request->image->extension();
            $request-> image-> move(public_path('img/user/'),$image);
            $user-> image = $image;
        }
        $user->updatedAt = new \DateTime();
        $user -> save();
        if ($user -> roleId == 2){
            return redirect() -> route('admin.admin.index') -> with('success', 'Update successfully');
        } else if ($user -> id == Auth::user()-> id){
            return redirect() -> route('admin') -> with('success', 'Update successfully');
        }
        else {
            return redirect() -> route('admin.member.index') -> with('success', 'Update successfully');
        }
    }
    public function delete($id){
        $user = User::find($id);
        $roleId = $user -> roleId;
        $user -> delete();
        if ($roleId == 2){
            return redirect() -> route('admin.admin.index') -> with('success', 'Delete successfully');
        } else {
            return redirect() -> route('admin.member.index') -> with('success', 'Delete successfully');
        }
    }
}
