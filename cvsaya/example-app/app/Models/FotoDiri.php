<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoDiri extends Model
{
    use HasFactory;

    protected $table = '1fotodiri';
    protected $primaryKey = 'IDfoto';
    public $timestamps = false;

    protected $fillable = [
        'idlogin',
        'Gambar',
        'TglPost',
        'del',
        'kanan',
        'kiri',
        'ktp',
        'akta_Nikah'
    ];
    protected $casts = [];

    protected $attributes = [
        'del'=> 0,
        'kiri' => 'a'
    ];

    public function getGambarAttribute($value) {
        if(empty($value)) return "";
        return env('ASSET_DOKUMEN') .$value;
    }

    public function getKiriAttribute($value){
        if(empty($value)) return "";
        return env('ASSET_DOKUMEN') . $value;
    }

    public function getKananAttribute($value) {
        if(empty($value)) return "";
        return env('ASSET_DOKUMEN') .$value;
    }

    public function getKtpAttribute($value){
        if(empty($value)) return "";
        return env('ASSET_DOKUMEN') . $value;
    }
    public function getAktaNikahAttribute($value){
        if(empty($value)) return "";
        return env('ASSET_DOKUMEN') . $this->attributes['akta_Nikah'];
    }
}
