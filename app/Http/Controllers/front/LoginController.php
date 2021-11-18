<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function getUserLogin(){
        return view('front.user.login');

    }
    public function postUserLogin(Request $request){
        $user=User::where(["email"=>$request->email])->first();

        if(!$user || Hash::check($request->password,
                $user->password)){
         return redirect(route('/'))->with(['error' => 'error in your data']);

        }
        else{
            $request->session()->put('user',$user);
            return  view('front.user.userProfile');
        }
    }
    public function getRegisterUser(){
        return view('front.user.register1');
    }
    public function store(Request $request){
        $user =User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),


        ]);
        $user->attachRole('student');

        if ($user){
            return back()->with('success','Registeration successfully!');
        }
        return redirect()->back()->with('error','Error in your registeration!');

    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/');
}
}
