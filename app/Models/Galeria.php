<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = ['title','images'];
    protected $casts = [
        'images'=>'array'
    ];
}
