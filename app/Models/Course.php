<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 
        'description',
        'date',
        'venue',
        'duration',
        'fees',
        'details',
        'course_for',
        'goals',
        'presentation',
        'certificate',
        'bronchure',
    ];
}
