<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contestant_award extends Model
{
    use HasFactory;
      protected $fillable = [
        'contestant_id',
        'award_id',
        'year',
         'status'
    ];
}
