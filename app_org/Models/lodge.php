<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lodge extends Model
{
    use HasFactory;
      protected $fillable = [
        'lodge_name',
        'owner_name',
        'contact',
         'email',
          'location',
         'gm_contact',
         'gm_email',
         'status'      

    ];
}

