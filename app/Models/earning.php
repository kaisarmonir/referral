<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class earning extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'own',
        'firstGen',
        'secondGen',
        'thirdGen',
        'daily',
        'video',
        'withdraw',
    ];

}
