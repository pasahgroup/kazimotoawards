<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lodgetrainee extends Model
{
    use HasFactory;
     protected $fillable = [
     	'pin',
        'class',
        'session',
        'first_name',
        'middle_name',
        'last_name',
        'no_topic',
        'trained_topic',
        'gender',
        'mobile_no',
        'email',
        'photo',
        'lodge',
        'designation',
         'status',
        'user_id'
    ];

        public static function getAsset($n){
   
      $value = DB::select('select id,session from sessions where class_name="'.$n.'" order by class_name');

//dd($value);
      return $value;
    }
}
