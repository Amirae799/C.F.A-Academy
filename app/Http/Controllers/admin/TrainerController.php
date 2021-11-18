<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainer;
use  Illuminate\Http\Request\requests\ValRequeat;

class TrainerController extends Controller
{
    //
    public function allTrainers(){
        $data['trainers']=Trainer::select('*')->get();
        return view('admin.getAllTrainers')->with($data);
    }
    public function addTrainer(){
return view('admin.addTrainer');
    }
    public function saveTrainer(Request $request){

            //insert  table offers in database
            $trainer =Trainer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' =>$request->password,
                'deprt' => $request->deprt,
                'role'=>$request->role

            ]);
           // $trainer->attachRole('normal');

            if ($trainer){
                return back()->with('success','add successfully!');
            }
            return redirect()->back()->with('error','Error in addtion!');


    }
    public function delete($id){
     $trainer=Trainer::find($id);
if(!$trainer){
    return redirect()-back()->with(['error'=>('not found in db')]);
}
else{
$trainer->delete();
return redirect()->back()->with(['success'=>('trainer deleted successfully')]);
}
    }
    public function edit($id){
        $trainers=Trainer::find($id);
        if(!$trainers)
        return redirect()->back();
        $trainers=Trainer::select('name','phone','email','password','deprt','photo','role')->find($id);
        return view('admin.updateTrainer',compact('trainers'));
    }
    public function update(){

    }
}
