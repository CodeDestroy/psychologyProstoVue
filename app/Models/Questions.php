<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected $fillable = [
        'test_id',
        'score',
        'type'
        
    ];

    public function tests()
    {
        return $this->belongsTo(Tests::class);
    }
}
