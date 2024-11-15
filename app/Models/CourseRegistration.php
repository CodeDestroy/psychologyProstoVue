<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    protected $fillable = [
        'user_id',
        'shouldBeCheckedOut',
        'isAPPCP',
        'isHealthyChildGk',
        'isHealthyChildFranch',
        'isLegalHealthyChildGK',
        'isStudent',
        'isLegalHealthyChildFranch',
        'managerCheckedOut',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
