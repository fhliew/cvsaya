<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;
    protected $table = '1employee';

    public $timestamps = false;

    protected $fillable = [
        'tahun' ,
        'sampai' ,
        'sebagai' ,
        'perusahaan' ,
        'gaji' ,
        'jobdesk' ,
        'resign' ,
        'referensi' ,
        'kondisi' 
    ];
}
