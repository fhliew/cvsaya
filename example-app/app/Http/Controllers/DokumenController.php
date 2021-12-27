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
            'topBorderHeight' => 79,
            'mt' => 67,
            'dataDokumen'=> FotoDiri::where('idlogin', $idlogin)->first()
        ]);
    }

    public static function insert(Request $req){
        $idlogin = 644;
        $input = $req->input();
        $fotoDiri = FotoDiri::where('idlogin',$idlogin)->first();
        $rules = [];
        $updateArrays = [];
        
        if (empty($fotoDiri->Gambar)) $rules['Gambar'] = 'required';
        if (empty($fotoDiri->kanan)) $rules['kanan'] = 'required';
        if (empty($fotoDiri->kiri)) $rules['kiri'] = 'required';
        if (empty($fotoDiri->ktp)) $rules['ktp'] = 'required';
        if (empty($fotoDiri->akta_Nikah)) $rules['akta_Nikah'] = 'required';

        if(!empty($input['Gambar'])) $updateArrays['Gambar'] = $input['Gambar'];
        if(!empty($input['kanan'])) $updateArrays['kanan'] = $input['kanan'];
        if(!empty($input['kiri'])) $updateArrays['kiri'] = $input['kiri'];
        if(!empty($input['ktp'])) $updateArrays['ktp'] = $input['ktp'];
        if(!empty($input['akta_Nikah'])) $updateArrays['akta_Nikah'] = $input['akta_Nikah'];

        $validate = Validator::make($input, $rules);
        if(!$validate->fails()){
            if(FotoDiri::where('idlogin',$idlogin)){
                try{
                    FotoDiri::where(
                        'idlogin', $idlogin
                    )->update($updateArrays);
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
                    'akta_Nikah'=> $input['akta_Nikah'],
                    'TglPost' => date("Y-m-d h:i:s")
                ]);
                if($fotoDiri->wasRecentlyCreated) return back()->withErrors(['msg' => "Record tersimpan!!"]);
                else return back()->withErrors(['msg' => "Record tidak tersimpan!!"]);
            }
        }
        return back()->withErrors(['msg' => "Data belum lengkap!!"]);  
    }
}
