<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Employeedetail;
use App\Models\KeinginanGaji;

class Profilcontroller extends Controller
{
    public static function show(){
        $idlogin = 644;
        
        return view('CvsayaProfil',[
            'title' => 'Profil',
            'view' => 'CvsayaProfil',
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
