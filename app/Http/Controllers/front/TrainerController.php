<?php

namespace App\Http\Controllers\front;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\requests\ValRequest;
use App\Models\Trainer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TrainerController extends Controller
{
    //
    public function getRegisterTrainer(){
        return view('front.trainer.register1');
    }

    public function store(ValRequest $request){
        //insert  table offers in database
        $trainer =Trainer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' =>$request->password,
            'deprt' => $request->deprt,

        ]);

        if ($trainer){
            return back()->with('success','Registeration successfully!');
        }
        return redirect()->back()->with('error','Error in your registeration!');

    }

    public function getTrainerLogin(){
        return view('front.trainer.login');
    }

    public function postTrainerLogin(Request $request){
        // $trainer = Trainer::where(['email'=>$request->email])->first();
        // if($trainer || Hash::check($request->password,$trainer->password)){
        //     return redirect()->back()->with('error','Error in your login!');
        // }else{
        //     // return view('front.trainer.trainerProfile')->with('success','login successfully!');
        //     $request->session()->put('trainer',$trainer);
        //     return redirect()->intended(route('trainer.dashboard'));
        //     //return view('front.trainer.trainerProfile');
        // }
        if (Auth::guard('trainer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            Session::put('trainer',auth('trainer')->user());
            return view('front.trainer.trainerProfile');
        }else{
            return redirect()->back()->withErrors(['email' => 'البيانات الخاصة بك غير صحيحة']);
        }
    }

    public function trainerProfile(){
        return view('front.trainer.trainerProfile');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
    public function profile($id){
        $data['trainers']=Trainer::select('*')->get();
        //$data['trainer']=Trainer::select('*')->get();
        return view('front.trainer.trainerProfile')->with($data);


    }

}
