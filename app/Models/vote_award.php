<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote_award extends Model
{
    use HasFactory;
        protected $fillable = [
        'vote_id',
        'contestant_id',
        'award_id',
        'year',
        'status'
    ];
}
