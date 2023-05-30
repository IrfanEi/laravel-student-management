<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name']; // Fillable attributes for mass assignment

    // Define relationships
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'grades')->withPivot('grade');
    }
}
