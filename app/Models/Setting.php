<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $table='settings';
    protected $fillable = [
        'id',
        'name',

        'email',
        'city',
        'address',
        'phone',
        'workhours',
        'logo',
        'favicon',
        'map',
        'fb',
        'twitter',

    ];
}
