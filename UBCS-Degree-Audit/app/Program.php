<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['program_code', 'program_name', 'min_credits','min_cgpa'];
}
