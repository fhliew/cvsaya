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
            'topBorderHeight' => 120,
            'listPendidikan'=> Pendidikan::where('idlogin', $idlogin)->get(),
            'listPengalaman'=> Pengalaman::where('idlogin', $idlogin)->get(),
            'listKualifikasi'=> Kualifikasi::where('idlogin', $idlogin)->get(),
            'mt' => 100
        ]);
    }

    public static function goToedit($IDkualifikasi){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Kualifikasi',
            'topBorderHeight' => 120,
            'variables'=> $IDkualifikasi,
            'listKualifikasi'=> Kualifikasi::where('IDkualifikasi', self::getIdkualifikasi($IDkualifikasi))->get(),
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
            date_default_timezone_set("Asia/Jakarta");
            $kualifikasi = Kualifikasi::create([
                'idlogin' => $idlogin, 
                'kualifikasi' => $input['kualifikasi'],
                'TglPost' => date("Y-m-d h:i:s"),
            ]);
            if($kualifikasi->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
            else return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }

    public static function edit(Request $req){
        $idlogin = 644;

        $input = $req->input();
        var_dump($input['variables']);
        $validate = Validator::make($input,[
            'kualifikasi' => 'required'
        ]);

        if(!$validate->fails()){
            try{
                Kualifikasi::where(
                    'IDkualifikasi', self::getIdkualifikasi($input['variables'])
                )->update(
                    ['kualifikasi'=> $input['kualifikasi']]
                );
                return back()->withErrors(['msg' => "Record terupdate!!"]);
            }catch(Exception $e){
                return back()->withErrors(['msg' => "Record tidak terupdate!!"]);
            }
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }
}
