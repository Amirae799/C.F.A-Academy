<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
class Trainer extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'trainers';
    public function courses(){
      return  $this->hasMany('App\Models\Course');
    }
}
