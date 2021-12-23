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
        'idlogin',
        'ketposisi',
        'website',
        'gambar',
        'TglPost',
        'alamat',
        'IDprovinces',
        'job',
        'memimpin',
        'inginposisi',
        'profile',
        'website'
    ];
    protected $casts = [];

}
