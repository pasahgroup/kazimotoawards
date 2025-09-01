<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contestant extends Model
{
    use HasFactory;
       protected $fillable = [
        'full_name',
        'birth_date',
        'phone', 
        'email',
         'country', 
        'district',
        'education', 
        'education_of',
         'experience_one',
 'experience_two',
  'experience_three',

'images' => 'object',
'photo' => 'object',
  'file1',
  'file2',
  'file3',
  'file4',
  'file5',
        'status'
    ];


public function scopeActive($query)
    {
        return $query->where('status',"Active");
    }

}