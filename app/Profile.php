<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function student_grade()
    {
        return $this->belongsTo('App\StudentGrade', 'student_grade_id');
    }
}
