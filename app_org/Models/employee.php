<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
      protected $fillable = [
        'full_name',
        'phone',
        'email',
        'designation',
        'department',
        'location',
         'photo',         
         'reg_date',
         'status',
        'user_id'
    ];
}
