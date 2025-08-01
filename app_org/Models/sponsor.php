<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsor extends Model
{
    use HasFactory;
     protected $fillable = [
        'sponsor_name',
        'mobile',
        'email',
        'pledge',
        'contact_person',  
        'address',
        'website',   
        'logo',
        'status'
        
     ];
}
