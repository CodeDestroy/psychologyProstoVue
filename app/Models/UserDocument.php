<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'file',       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
