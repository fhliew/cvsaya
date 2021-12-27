<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrator';
    public $timestamps = false;
    protected $primaryKey = 'idlogin';

    protected $fillable = [
        'username',
        'password',
        'id_ktp',
        'nama_lengkap',
        'email',
        'no_telp',
        'blokir',
        'level',
        'TglPost',
        'device',
        'ip',
        'latitude',
        'longitude',
        'IDprovinces',
        'take'
    ];
    protected $casts = [];

    protected $attributes = [
        'username'=> "",
        'password' => "",
        'id_ktp'=>"",
        'nama_lengkap'=> "", 
        'email'=> "",
        'no_telp'=> "",
        'level'=>"",
        'device'=>"",
        'ip'=>"",
        'latitude'=>"",
        'longitude'=>"",
        'IDprovinces'=>0,
        'take'=>0,
    ];
}
