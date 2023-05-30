<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name']; // Fillable attributes for mass assignment

    // Define relationships
    public function students()
    {
        return $this->belongsToMany(Student::class, 'grades')->withPivot('grade');
    }
}
