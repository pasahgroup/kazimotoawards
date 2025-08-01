<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subproject extends Model
{
    /** @use HasFactory<\Database\Factories\SubprojectFactory> */
    use HasFactory;
     protected $fillable = [
        'sub_project_name',
        'sub_project_code',
        'project_id',
        'status',
        'level',
        
];
}
