<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Session;
use App\Models\Trainer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home(){
       $data['courses']=Course::select('id','name','small_des','cat_id','trainer_id','photo','price')
        ->OrderBy('id','desc')
        ->take('3')

        ->get();
        $data['Trainers_count']=Trainer::count();
        $data['Courses_count']=Course::count();
        $data['Students_count']=Student::count();
//dd($data);
        return view('front.home')->with($data);
    }


}
