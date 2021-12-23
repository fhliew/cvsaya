<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kualifikasi extends Model
{
    use HasFactory;

    protected $table = '1kualifikasi';

    public $timestamps = false;

    protected $fillable = [
        'idlogin',
        'kualifikasi',
        'TglPost',
        'del'
    ];
}
