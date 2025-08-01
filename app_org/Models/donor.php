<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    /** @use HasFactory<\Database\Factories\DonorFactory> */
    use HasFactory;
    protected $fillable=[
      'donor_name', 
      'contact_number',
      'address',      
      'email',
      'country',
      'logo',
      'status'
  ];
}
