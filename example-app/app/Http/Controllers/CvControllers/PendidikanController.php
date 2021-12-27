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

class PendidikanController extends Controller
{
    public static function show($title='Pendidikan'){
        $idlogin = 644;
        
        return view('CvsayaCv',[
            'title' => 'Pendidikan',
            'topBorderHeight' => 120,
            'listPendidikan'=> Pendidikan::where('idlogin', $idlogin)->get(),
            'mt' => 100
        ]);
    }

    public static function goToedit($idpendidikan){
        $idlogin = 644;
        return view('CvsayaEditCv',[
            'title' => 'Pendidikan',
            'topBorderHeight' => 120,
            'variables'=> $idpendidikan,
            'listPendidikan'=> Pendidikan::where('idpendidikan', self::getIdpendidikan($idpendidikan))->get(),
            'mt' => 100
        ]);
    }

    public static function getIdpendidikan($encryptedPendidikan){    
        return Crypt::decrypt($encryptedPendidikan);    
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();

        $validate = Validator::make($input,[
            'Tahun'=> 'required',
            'sampai'=>'required',
            'pendidikan'=>'required',
            'asal'=> 'required'
        ]);
        if(!$validate->fails()){
            $pendidikan = Pendidikan::create([
                'idlogin' => $idlogin, 
                'Tahun'=> $input['Tahun'],
                'sampai'=>$input['sampai'],
                'pendidikan'=>$input['pendidikan'],
                'asal'=> $input['asal']
            ]);
            if($pendidikan->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
            return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);
        }
        return back()->withErrors(['msg' => "Mohon semua Kolom diisi dengan benar!!"]);       
    }

    public static function edit(Request $req){
        $idlogin = 644;

        $input = $req->input();
        $validate = Validator::make($input,[
            'Tahun'=> 'required',
            'sampai'=>'required',
            'pendidikan'=>'required',
            'asal' =>'required'
        ]);
        if(!$validate->fails()){
            try{
                Pendidikan::where('idpendidikan', self::getIdpendidikan($input['variables']))->update(
                    [
                    'Tahun'=> $input['Tahun'],
                    'sampai'=>$input['sampai'],
                    'pendidikan'=>$input['pendidikan'],
                    'asal' =>$input['asal']
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
