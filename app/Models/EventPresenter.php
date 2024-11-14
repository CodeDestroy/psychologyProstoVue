<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPresenter extends Model
{
    protected $fillable = [
        'user_id',
        'event_id',
    ];


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    } 

    public function event(): HasOne
    {
        return $this->hasOne(Event::class, 'event_id');
    }

}
