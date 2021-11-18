<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cat;
use App\Models\Student;
use App\Models\Trainer;
class Course extends Model
{
    protected $table='courses';
    protected $guarded=['id'];
    protected $fillable = [
     'id',
     'name',
     'cat_id',
     'trainer_id',
     'small_des',
     'des',
     'price',
     'photo',
    ];
    use HasFactory;
    public function cat(){
      return  $this->belongsTo('App\Models\Cat');
    }
    public function trainer(){
       return $this->belongsTo('App\Models\Trainer');
    }
    public function student(){
      return  $this->belongsToMany('App\Models\Student');
    }
}
