<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tik extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'price',
        'description',

    ];



}
