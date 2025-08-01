<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    /** @use HasFactory<\Database\Factories\SlidesFactory> */
    use HasFactory;
     protected $fillable=[
      'photo_title', 
      'photo_description',        
      'photo',
       'award_id',  
       'subproject_id', 
       'display',
        'status',
        ];
}
