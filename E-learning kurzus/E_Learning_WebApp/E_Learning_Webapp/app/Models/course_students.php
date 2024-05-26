<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_students extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_neptun',
        'course_id',
        'created_at',
        'updated_at',
    ];
}
