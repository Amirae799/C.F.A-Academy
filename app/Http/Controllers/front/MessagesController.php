<?php

namespace App\Http\Controllers\front;

use App\Models\NewsLetter;
use App\Models\Massage;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessagesController
{
    //
    public function newsLetter(Request $req){
        $data=$req->validate([
        'email'=>'required|email'
        ]);
        NewsLetter::create($data);
        return back();
    }
    public function contactMessages(Request $req){
        $data=$req->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'nullable',
            'message'=>'required|string'
            ]);
            Massage::create($data);
            return back();
    }
    public function enroll(Request $req){
        $data=$req->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'spec'=>'nullable',

            'course_id'=>'required|exists:courses,id',

            ]);
            $student=Student::create([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'spec'=>$data['spec'],

            ]);
              $student_id=$student->id;
              DB::table('course_student')->insert([
              'course_id'=>$data['course_id'],
              'student_id'=>$student_id,
              'created_at'=>now(),
              'updated_at'=>now(),
              ]);
            return back();
    }
}
