<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lections extends Model
{
    //
    protected $fillable = [
        'event_id',
        'text',
        
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }
}
