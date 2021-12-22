<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;


class DokumenController extends Controller
{
    public static function show(){
        $idlogin = 644;
        
        return view('CvsayaDokumen',[
            'title' => 'Dokumen',
            'topborderheight' => 79,
            'mt' => 67
        ]);
    }
}
