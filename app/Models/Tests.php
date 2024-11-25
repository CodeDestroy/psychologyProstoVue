<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    //
    protected $fillable = [
        'event_id',
        'title',
        'description'
        
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }
}
