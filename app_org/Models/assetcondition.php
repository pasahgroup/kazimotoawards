<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assetcondition extends Model
{
    use HasFactory;
      protected $fillable = [
        'condition',
        'user_id'
    ];
}
