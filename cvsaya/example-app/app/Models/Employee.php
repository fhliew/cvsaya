<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = '1employee';

    public $timestamps = false;

    protected $fillable = [
        'job',
        'memimpin',
        'inginposisi',
        'profile',
        'website'
    ];

    protected $casts = [];
}
