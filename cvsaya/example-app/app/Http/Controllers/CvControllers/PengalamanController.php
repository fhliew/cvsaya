<?php

namespace App\Http\Controllers\CvControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;
use Illuminate\Support\Facades\Validator;
use Crypt;


class PengalamanController extends Controller
{
    public static function show($title='Pengalaman'){
        $idlogin = 644;
        
        return view('CvsayaCv',[
            'title' => 'Pengalaman',
            'topborderheight' => 120,
            'dataPengalaman'=> Pengalaman::where('idlogin', $idlogin)->get(),
            'mt' => 100
        ]);
    }
    public static function goToedit($idpengalaman){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Pengalaman',
            'topborderheight' => 120,
            'variables'=> $idpengalaman,
            'dataPengalaman'=> Pengalaman::where('idpengalaman', self::getIdpengalaman($idpengalaman))->get(),
            'mt' => 100
        ]);
    }

    public static function getIdpengalaman($encryptedPengalaman){    
        return Crypt::decrypt($encryptedPengalaman);    
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();

        $validate = Validator::make($input,[
            'tahun'=> 'required',
            'sampai'=>'required',
            'sebagai'=>'required',
            'perusahaan' =>'required',
            'gaji'=>'required',
            'jobdesk'=>'required',
            'resign'=>'required',
            'referensi'=>'required',
            'kondisi'=>'required',

        ]);
        if(!$validate->fails()){
            $employee = Pengalaman::create([
                'idlogin'=>$input['idlogin'],
                'tahun'=> $input['tahun'],
                'sampai'=>$input['sampai'],
                'sebagai'=>$input['sebagai'],
                'perusahaan'=>$input['perusahaan'],
                'jobdesk'=>$input['jobdesk'],
                'resign'=>$input['resign'],
                'kategori'=>$input['kategori'],
                'del'=>$input['del'],
                'gaji'=>$input['gaji'],
                'kondisi'=>$input['kondisi'],
                'referensi'=>$input['referensi'],
            ]);
            return back()->withErrors(['msg' => "Record tersimpan!!"]);
        }
        return $req->input;    
    }

    public static function edit(Request $req){
        $idlogin = 644;

        $input = $req->input();
        $validate = Validator::make($input,[
            'tahun'=> 'required',
            'sampai'=>'required',
            'sebagai'=>'required',
            'perusahaan' =>'required',
            'gaji'=>'required',
            'jobdesk'=>'required',
            'resign'=>'required',
            'referensi'=>'required',
            'kondisi'=>'required',

        ]);
        if(!$validate->fails()){
            $employee = Pengalaman::where(
                'idpengalaman', self::getIdpengalaman($input['variables'])
            )->update(
                [
                'tahun'=> $input['tahun'],
                'sampai'=>$input['sampai'],
                'sebagai'=>$input['sebagai'],
                'perusahaan'=>$input['perusahaan'],
                'gaji'=>$input['gaji'],
                'jobdesk'=>$input['jobdesk'],
                'resign'=>$input['resign'],
                'referensi'=>$input['referensi'],
                'kondisi'=>$input['kondisi'],
                ]
            );
            return back()->withErrors(['msg' => "Record terupdate!!"]);
        }
        return $req->input;    
    }
}
