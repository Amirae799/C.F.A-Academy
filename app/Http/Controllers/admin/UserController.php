<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//55
use Hash;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }
    //
    public function all(){
        $data['users']=User::select('*')->get();
        return view('admin.getAllUsers')->with($data);
    }
    public function delete($id){
        $user=User::find($id);
        if(!$user){
            return redirect()-back()->with(['error'=>('not found in db')]);
        }
        else{
        $user->delete();
        return redirect()->back()->with(['success'=>('user deleted successfully')]);
    }
}
public function add(){
    return view('admin.addUser');
}
public function save(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);
     //insert  table offers in database
     $user =User::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' =>Hash::make($request->password),
        'deprt' => $request->deprt,
        'role'=>$request->role

    ]);

   $user->attachRole('student');

    if ($user){
        return back()->with('success','add successfully!');
    }
    return redirect()->back()->with('error','Error in addtion!');

}
}
