<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;


class InformationsMasking extends Controller
{
    //public static function editCvsaya($idpendidikan,$idpengalaman,$IDkualifikasi){
    public static function editCvsaya($IDkualifikasi){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Kualifikasi',
            'topborderheight' => 120,
            //'dataPendidikan'=> Pendidikan::where('idpendidikan', $idpendidikan)->get(),
            //'dataPengalaman'=> Pengalaman::where('idpengalaman', $idpengalaman)->get(),
            'dataKualifikasi'=> Kualifikasi::where('IDkualifikasi', $IDkualifikasi)->get(),
            'mt' => 100
        ]);
    }
}
