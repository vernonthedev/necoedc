<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'city',
        'position', 
        'address', 
        'phone_number', 
        'course_id', 
        'payment_details', 
        'accepted_policies'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
