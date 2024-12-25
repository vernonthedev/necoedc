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
        'category_id',
        'details',
        'course_for',
        'goals',
        'presentation',
        'certificate',
        'bronchure',
        'image',
    ];

    //change the date type from strings to datetime format
    //for easier display and working with
    protected  $casts = [
        'date'=>'datetime'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function registrations()
    {
        return $this->hasMany(CourseRegistration::class);
    }

    //format the date to human readable format
    public function getformattedDate()
    {
        return $this->date->format('F jS Y');
    }
}
