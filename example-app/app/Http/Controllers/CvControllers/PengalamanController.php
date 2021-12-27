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
            'topBorderHeight' => 120,
            'listPengalaman'=> Pengalaman::where('idlogin', $idlogin)->get(),
            'mt' => 100
        ]);
    }
    public static function goToedit($idpengalaman){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Pengalaman',
            'topBorderHeight' => 120,
            'variables'=> $idpengalaman,
            'listPengalaman'=> Pengalaman::where('idpengalaman', self::getIdpengalaman($idpengalaman))->get(),
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
            $pengalaman = Pengalaman::create([
                'idlogin'=>$idlogin,
                'tahun'=> $input['tahun'],
                'sampai'=>$input['sampai'],
                'sebagai'=>$input['sebagai'],
                'perusahaan'=>$input['perusahaan'],
                'jobdesk'=>$input['jobdesk'],
                'resign'=>$input['resign'],
                'gaji'=>$input['gaji'],
                'kondisi'=>$input['kondisi'],
                'referensi'=>$input['referensi'],
            ]);
            if($pengalaman->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
            return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
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
            try{
                Pengalaman::where(
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
            catch(Exception $e){
                return back()->withErrors(['msg' => "Record tidak terupdate!!"]);
            }
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }
}
