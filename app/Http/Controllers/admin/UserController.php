<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Facade\FlareClient\View;

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
public function edit($id){
    $data['users']=User::find($id);
    return view('admin.updateUser')->with($data);
   // return view('admin.updateUser',compact('users'));
}
public function update(Request $request ,$id){
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'roles' => 'required'
      ]);

      $user = User::find($id);
      $requestData = $request->except('password');
      $user->update($requestData);
      $user->syncRoles($request->roles);
      return view('admin.getAllUsers');
}
public function roles(){
    $data['roles']=Role::select('*')->get();
        return view('admin.roles')->with($data);
}
}
