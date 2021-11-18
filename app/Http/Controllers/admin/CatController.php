<?php

namespace App\Http\Controllers\admin;
use App\Models\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    public function allCategory(){
        $data['cats']=Cat::select('*')->get();
return view('admin.getAllCats')->with($data);
    }
}
