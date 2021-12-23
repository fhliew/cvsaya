<?php

namespace App\Http\Controllers\CvControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;
use Illuminate\Support\Facades\Validator;

use Crypt;

class KualifikasiController extends Controller
{
    static private $id;

    public static function show(){
        $idlogin = 644;
        
        return view('CvsayaCv',[
            'title' => 'Kualifikasi',
            'topborderheight' => 120,
            'dataPendidikan'=> Pendidikan::where('idlogin', $idlogin)->get(),
            'dataPengalaman'=> Pengalaman::where('idlogin', $idlogin)->get(),
            'dataKualifikasi'=> Kualifikasi::where('idlogin', $idlogin)->get(),
            'mt' => 100
        ]);
    }

    public static function goToedit($IDkualifikasi){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Kualifikasi',
            'topborderheight' => 120,
            'variables'=> $IDkualifikasi,
            'dataKualifikasi'=> Kualifikasi::where('IDkualifikasi', self::getIdkualifikasi($IDkualifikasi))->get(),
            'mt' => 100
        ]);
    }

    public static function getIdkualifikasi($encryptedKualifikasi){    
        return Crypt::decrypt($encryptedKualifikasi);    
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();

        $validate = Validator::make($input,[
            'kualifikasi' => 'required'
        ]);
        if(!$validate->fails()){
            $employee = Kualifikasi::create([
                'idlogin' => $idlogin, 
                'kualifikasi' => $input['kualifikasi'],
                'TglPost' => date("Y-m-d h:i:s"),
                'del'=> 0
            ]);
            return back()->withErrors(['msg' => "Record tersimpan!!"]);
        }
        return $req->input;    
    }

    public static function edit(Request $req){
        $idlogin = 644;

        $input = $req->input();
        var_dump($input['variables']);
        $validate = Validator::make($input,[
            'kualifikasi' => 'required'
        ]);

        if(!$validate->fails()){
            $employee = Kualifikasi::where(
                'IDkualifikasi', self::getIdkualifikasi($input['variables'])
            )->update(
                ['kualifikasi'=> $input['kualifikasi']]
            );
            return back()->withErrors(['msg' => "Record terupdate!!"]);
        }
        return $req->input;    
    }
}
