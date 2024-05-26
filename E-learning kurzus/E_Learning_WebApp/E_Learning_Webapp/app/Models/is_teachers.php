<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class is_teachers extends Model
{
    use HasFactory;
    protected $fillable=[
        'neptun',
        'teacher',
        'created_at',
        'updated_at',

    ];
}
