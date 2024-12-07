<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
class Event extends Model
{
    use AsSource;
    protected $fillable = [
        'name',
        'description',
        'course_id',
        'image',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'status',
        'order',
        'color'
        
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
