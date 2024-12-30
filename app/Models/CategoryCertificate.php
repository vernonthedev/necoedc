<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryCertificate extends Model
{
    protected $fillable = [
        "title",
        'slug',
        'thumbnail',
    ];

}
