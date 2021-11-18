<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $table = 'roles';
   // public $guarded = [];
    protected $guarded=['id'];
}
