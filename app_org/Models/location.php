<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_name',
        'location_type',
        'country',
        'region',
        'district',
        'ward_town',
        'lat',
        'long',
        'lodge_id',
        'user_id'
    ];
}
