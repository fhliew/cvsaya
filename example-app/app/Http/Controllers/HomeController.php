<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;
use App\Models\FotoDiri;
use App\Models\Administrator;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public static function show(){
        $idlogin = 644;
        return view('CvsayaHome',[
            'title' => 'CvSaya',
            'topBorderHeight' => 79,
            'mt' => 67,
            'dataDokumen'=> FotoDiri::where('idlogin', $idlogin)->first(),
            'dataEmp'=> Employee::where('idlogin', $idlogin)->first(),
            'dataAdmin'=> Administrator::where('idlogin', $idlogin)->first()
        ]);
    }
}
