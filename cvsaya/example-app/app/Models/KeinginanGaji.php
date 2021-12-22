<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeinginanGaji extends Model
{
    use HasFactory;

    protected $table = '1keinginangaji';

    protected $fillable = [
        'Previous',
        'Current',
        'Desired',
        'Ulasan',
        'kondisi',
    ];

    protected $casts = [];
}
