<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = '1pengalaman';

    public $timestamps = false;

    protected $fillable = [
        'idlogin',
        'tahun',
        'sampai',
        'sebagai',
        'perusahaan',
        'gaji',
        'jobdesk',
        'resign',
        'referensi',
        'kondisi',
        'kategori',
        'del' 
    ];
}
