<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Kualifikasi;
use App\Models\FotoDiri;
use Illuminate\Support\Facades\Validator;


class DokumenController extends Controller
{
    public static function show(){
        $idlogin = 644;
        
        return view('CvsayaDokumen',[
            'title' => 'Dokumen',
            'topborderheight' => 79,
            'mt' => 67,
            'dataDokumen'=> FotoDiri::where('idlogin', $idlogin)->first()
        ]);
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();

        $validate = Validator::make($input,[
            'Gambar' => 'required',
            'kanan' => 'required',
            'kiri' => 'required',
            'ktp' => 'required',
            'aktaNikah' => 'required'
        ]);
        if(!$validate->fails()){
            if(FotoDiri::where('idlogin',$idlogin)->count() > 0){
                try{
                    FotoDiri::where(
                        'idlogin', $idlogin
                    )->update([
                        'Gambar'=> $input['Gambar'],
                        'kanan'=> $input['kanan'],
                        'kiri'=> $input['kiri'],
                        'ktp'=> $input['ktp'],
                        'akta_Nikah'=> $input['aktaNikah']
                    ]);
                    return back()->withErrors(['msg' => "Record terupdate!!"]);
                }
                catch(Exception $e){
                    return back()->withErrors(['msg' => "Record tidak terupdate!!"]);
                }
            }
            else{
                date_default_timezone_set("Asia/Jakarta");
                $fotoDiri = FotoDiri::create([
                    'idlogin' => $idlogin, 
                    'Gambar'=> $input['Gambar'],
                    'kanan'=> $input['kanan'],
                    'kiri'=> $input['kiri'],
                    'ktp'=> $input['ktp'],
                    'akta_Nikah'=> $input['aktaNikah'],
                    'TglPost' => date("Y-m-d h:i:s")
                ]);
                if($fotoDiri->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
                else return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);
            }
        }
        return back()->withErrors(['msg' => "Data belum lengkap!!"]);       
    }
}
