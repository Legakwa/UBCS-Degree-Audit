<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['program_code', 'program_name', 'min_credits','min_cgpa'];

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }

    public function hasAnyCourses($courses)
    {
        if($this->courses()->whereIn('course_name', $courses)->first())
        {
            return true;
        }

        return false;
    }

    public function hasCourse($course)
    {
        if($this->courses()->where('course_name', $course)->first())
        {
            return true;
        }

        return false;
    }
}
