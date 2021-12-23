<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\KeinginanGaji;

class PekerjaanController extends Controller
{
    public static function show(){
        $idlogin = 644;

        return view('CvsayaPekerjaan',[
            'title' => 'Pekerjaan',
            'topborderheight' => 79,
            'dataEmp'=>  Employee::where('idLogin', $idlogin)
            ->first(),
            'dataGaji'=> KeinginanGaji::where('idLogin', $idlogin)
            ->first(),
            'mt' => 67
        ]);
    }
}
