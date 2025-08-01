<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class subcategory extends Model
{
    use HasFactory;
      protected $fillable = [
        'category_id',
        'subcategory',
        'user_id'
    ];


      public static function getSubcategory($n){
   
      $value = DB::select('select * from subcategories where category_id="'.$n.'" order by subcategory');
      return $value;
    }
}
