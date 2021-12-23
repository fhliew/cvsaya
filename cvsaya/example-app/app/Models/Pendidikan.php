<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = '1pendidikan';

    public $timestamps = false;

    protected $fillable = [
        'idlogin',
        'del',
        'Tahun',
        'sampai',
        'pendidikan',
        'asal'
    ];
}



