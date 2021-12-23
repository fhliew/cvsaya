<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDetail;
use App\Models\KeinginanGaji;
use App\Models\Agama;

class ProfilController extends Controller
{
    public static function show(){
        $idlogin = 644;
        $dataEmpdet = EmployeeDetail::where('idlogin', $idlogin)->first();
        return view('CvsayaProfil',[
            'title' => 'Profil',
            'topborderheight' => 79,
            'dataEmp'=> Employee::where('idlogin', $idlogin)->first(),
            'dataEmpdetails'=> $dataEmpdet,
            'dataGaji'=> KeinginanGaji::where('idlogin', $idlogin)->first(),
            'dataAgama'=> Agama::all(),
            'mt' => 67
        ]);
    }
}
