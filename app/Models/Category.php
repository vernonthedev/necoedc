<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'slug','image'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
