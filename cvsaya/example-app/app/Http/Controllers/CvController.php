<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;


class CvController extends Controller
{
    public static function show($title='Pendidikan'){
        $idlogin = 644;
        
        return view('CvsayaCv',[
            'title' => $title,
            'topborderheight' => 120,
            'dataPendidikan'=> Pendidikan::where('idlogin', $idlogin)
            ->get(),
            'dataPengalaman'=> Pengalaman::where('idlogin', $idlogin)->get(),
            'dataKualifikasi'=> Kualifikasi::where('idlogin', $idlogin)
            ->get(),
            'mt' => 100
        ]);
    }
}
