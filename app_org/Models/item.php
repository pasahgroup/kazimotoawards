<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

      protected $fillable = [
        'item_name',
        'owner_name',
        'serial_no',
        'barcode',
        'tag_no',
        'location',
        'status'
    ];
}
