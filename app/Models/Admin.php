<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;

class Admin extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory;
    //protected $guarded=['id'];
    protected $table = 'admins';
    protected $guard='admin';
    protected $guarded=['id'];
}
