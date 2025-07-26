<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    /** @use HasFactory<\Database\Factories\AboutusFactory> */
    use HasFactory;
    protected $fillable = [
        'who_weare',
        'mission_photo',
        'mission',
        'vision_photo',
        'vision',
        'status',
        
];
}
