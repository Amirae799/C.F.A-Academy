<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest:admin')->except('logout');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function logout(){

            Auth::guard('admin')->logout();
            return redirect('/');


    }
    public function allStudent(){

        $students= Student::all();
        // return collection

    return view('admin/getAllStudents', compact('students'));
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|string',
        ]);

        // Try Login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('dashboard'))->with(['success' =>'login is done ']);
        }
        // If Not Success Login
        return redirect()->back()->withErrors(['email' => 'البيانات الخاصة بك غير صحيحة']);


  }
}
