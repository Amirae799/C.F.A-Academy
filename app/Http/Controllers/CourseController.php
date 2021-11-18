<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function cat($id){
        $data['cat']=Cat::find($id);
        $data['courses']=Course::where('cat_id',$id)->get();
        return view('front.courses.cat')->with($data);
    }
    public function showDetails($id){
        $data['course']=Course::find($id);
        return view('front.courses.courseDetails')->with($data);
    }
    public function allCourses(){
        $data['courses']=Course::select('id','name','price','photo')->get();
        return view('admin.getAllCourses')->with($data);
    }
}
