<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Save;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
use App\Mail\PasswordEmail;
class AuthController extends Controller
{
    public function getLogin(){
        if (Auth::check()){
            return redirect() -> route('index');
        }
        return view('user.login');
    }
    public function postLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials) ) {
            $request->session()->regenerate();
            if(Auth::user()-> roleId == 2 || Auth::user() -> roleId == 1){
                return redirect()->route('admin');
            } else {
                return redirect()->route('index');
            }
        }  else {
            return redirect() -> route('getLogin') ;
        }

    }
    public function getRegister(){
        return view('user.register');
    }
    public function postRegister(Request $request){
        $user = new User;
        $user -> name = $request -> name;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> createdAt = new \DateTime();
        $user -> roleId = 3;
        $user -> save();
        $mail = $request-> email;
        $name = $request-> name;
        $email = new WelcomeEmail($name);
        Mail::to($mail)-> send($email);
        return redirect() -> route('getLogin') -> with('success','Register successfully');;
    }
    public function getPassword(){
        return view('user.password');
    }
    public function logout(){
        Auth::logout();
        return redirect() -> route('getLogin');
    }
    public function profile($id){
        $user = User::find($id);
        $bookmark = Save::where('userId',$id) -> get();
        return view('user.profile', ['user' => $user, 'save' => $bookmark]);
    }
    public function password(Request $request){
        if (Auth::check()){
            return redirect() -> route('index');
        }
        if(!(User::where("username",$request->username)->first())){
            return back();
        };

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $password = bcrypt($randomString);
        $user = User::where("username",$request->username)->first();
        $user -> password = $password;
        $user -> save();
        $mail = $user -> email;
        $name = $user -> name;
        $email = new PasswordEmail($randomString,$name);
        Mail::to($mail)-> send($email);
        return redirect() -> route('getLogin') -> with('success','Please check your email!');
    }

}
