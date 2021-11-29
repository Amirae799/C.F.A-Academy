<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function allCourses(){
        $data['courses']=Course::select('id','name','price','photo')->get();
        return view('admin.getAllCourses')->with($data);
    }
    public function create(){
        return view('admin.addCourse');
    }
}
