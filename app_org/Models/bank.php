<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    /** @use HasFactory<\Database\Factories\BankFactory> */
    use HasFactory;
    protected $fillable = [
        'bank_name',
        'swift_code',
        'bank_account_no',
        'bank_holder_name',
        'currency',
        'country',
        'status',
      ];
}
