<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agama;

class EmployeeDetail extends Model
{
    use HasFactory;
    protected $table = '1employeedetail';
    public $timestamps = false;
    protected $primaryKey = 'idDetail';

    public function agama(){
        $this->hasone(Agama::class);
    }
    
    protected $fillable = [
        'ttl',
        'tpl',
        'jk',
        'IdAgama',
        'idlogin',
    ];
    
    protected $attributes = [
        'referensi'=>"",
        'alternatifNo'=>0,
        'kategori'=>0,
        'karirkerja'=>"",
    ];
}
