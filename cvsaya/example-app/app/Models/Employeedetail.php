<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;
    protected $table = '1employeedetail';
    public $timestamps = false;


    protected $fillable = [
        'ttl',
        'tpl',
        'jk',
        'IdAgama',
        'referensi'
    ];
}
