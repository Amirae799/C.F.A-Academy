<?php

namespace App\Http\Controllers\front;

use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController 
{
    //
    public function contact(){
        $data['settings']=Setting::find();
        return view('front.contactus')->with($data);
    }
}
