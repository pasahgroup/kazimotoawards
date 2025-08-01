<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignactivity extends Model
{
    use HasFactory;
          protected $fillable = [
        'project_id',
        'subproject_id',
        'activity_id',
        'percent',
    ];
}
