<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = [
        'id',
        'name',];
    public function coures(){
    return $this->hasMany('App\Models\Course');
    }
}
