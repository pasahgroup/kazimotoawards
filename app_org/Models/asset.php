<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class asset extends Model
{
    use HasFactory;

        protected $fillable = [
        'asset_name',
        'category',
        'subcategory',
        'model',
        'serial_no',
        'tag_no',
        'barcode',
        'mac_address',
        'photo',
        'assign_date',
        'location',
        'owned_by',
        'assigned_to',
        'supply',
        'bprice',
        'warranty',
        'status',
        'user_id'
    ];


       public static function getAsset($n){   
      $value = DB::select('select id,subcategory from subcategories where category_id="'.$n.'" order by subcategory');
         // $value = DB::select('select id,session from sessions where class_name="'.$n.'" order by class_name');
      return $value;
    }
}
