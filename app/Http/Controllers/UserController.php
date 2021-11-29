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
    //    $data['courses']=Course::select('id','name','small_des','photo','price')
    //     ->OrderBy('id','desc')
    //     ->take('3')
    //     ->get();

        $data['courses'] = Course::with('cat')->OrderBy('id','desc')->take('3')->get();
        $data['Trainers_count']=Trainer::count();
        $data['Courses_count']=Course::count();
        $data['Students_count']=Student::count();
//dd($data['courses']);
        return view('front.home')->with($data);
    }


}
