<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'status',
        'price'
        
    ];
}
