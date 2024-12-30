<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        "title",
        'slug',
        'thumbnail',
        'description',
        'attendee',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryCertificate::class);
    }

}


