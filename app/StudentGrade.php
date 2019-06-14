<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentGrade extends Model
{
    public function profile()
    {
        return $this->hasMany('App\Profile', 'student_grade_id');
    }
}
