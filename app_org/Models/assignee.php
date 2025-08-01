<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignee extends Model
{
    use HasFactory;
       protected $fillable = [
        'student_id',
        'lodge',
        'designation',
        'date',
        'status',
        'user_id'
    ];
}
