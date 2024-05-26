<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'course_code',
        'course_time',
        'course_teacher',
        'course_teacher_neptunid',
        'created_at',
        'updated_at',

    ];
}
