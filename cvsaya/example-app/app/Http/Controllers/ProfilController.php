<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;
use App\Models\KeinginanGaji;

class ProfilController extends Controller
{
    public static function show(){
        $idlogin = 644;
        
        return view('CvsayaProfil',[
            'title' => 'Profil',
            'topborderheight' => 79,
            'dataEmp'=> Employee::where('idlogin', $idlogin)
            ->first(),
            'dataEmpdetails'=> EmployeeDetail::where('idlogin', $idlogin)
            ->first(),
            'dataGaji'=> KeinginanGaji::where('idlogin', $idlogin)
            ->first(),
            'mt' => 67
        ]);
    }
}
